<?php
// Define database connection function
//code for the email subscription management system
function doDB() {
  global $conn;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "subscribe";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
}

// Define email checker function
function emailChecker($email) {
  global $conn;
  $check = "SELECT id FROM subscribers WHERE email = ?";
  $stmt = mysqli_prepare($conn, $check);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  return mysqli_num_rows($result);
}

// Check if the form is being submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  doDB();

  $emailExists = emailChecker($_POST['email']);

  if ($_POST['action'] == 'subscribe' && $emailExists == 0) {
    $sql = "INSERT INTO subscribers (email) VALUES (?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
    mysqli_stmt_execute($stmt);
    $display_block = "<p>You're subscribed!</p>";
  } elseif ($_POST['action'] == 'unsubscribe' && $emailExists > 0) {
    $sql = "DELETE FROM subscribers WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
    mysqli_stmt_execute($stmt);
    $display_block = "<p>You're unsubscribed!</p>";
  } else {
    $display_block = "<p>Email address not found. No action taken.</p>";
  }
}
?>

<form action="manage.php" method="post">
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
  </div>
  <div>
    <label for="action">Action:</label>
    <input type="radio" id="subscribe" name="action" value="subscribe">
    <label for="subscribe">Subscribe</label>
    <input type="radio" id="unsubscribe" name="action" value="unsubscribe">
    <label for="unsubscribe">Unsubscribe</label>
  </div>
  <input type="submit" value="Submit">
</form>

<?php
  if (isset($display_block)) {
  echo $display_block;
}
?>