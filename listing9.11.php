<html>
<head>
<title>Sending mail from the form in Listing 9.10</title>
</head>
<body>
<?php
echo "<p>Thank you, " . htmlspecialchars($_POST['name'] ?? '') . ", for your message!</p>";
echo "<p>Your email address is: " . htmlspecialchars($_POST['email'] ?? '') . "</p>";
echo "<p>Your message was:<br>" . nl2br(htmlspecialchars($_POST['message'] ?? '')) . "</p>";
// δημιουργία μηνύματοσ
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
$msg = "Name: " . $name . "\n";
$msg .= "Email: " . $email . "\n";
$msg .= "Message:\n" . $message . "\n";
// ρυθμίςεισ email
$recipient = "yourdomain.com";
$subject = "Form Submission Results";
$headers = "From: webmaster@yourdomain.com\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
// αποςτολή
mail($recipient, $subject, $msg, $headers);
?>
</body>
</html>