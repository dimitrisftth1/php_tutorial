<?php

$num_to_guess = 42;
//tries counter
//$num_to_tries = isset($_POST['num_tries']) ? (int)$_POST['num_tries'] + 1 : 0;

if (isset($_POST['num_tries'])) {
    $num_tries = (int)$_POST['num_tries'] + 1;
} else {
    $num_tries = 0;
} 

$message = "";

if (!isset($_POST['guess'])) {
    $message = "Welcome to the guessing machine!";
} elseif ((int)$_POST['guess'] > $num_to_guess) {
    $message = "Your guess is too big! Try a smaller number. ";    
} elseif ((int)$_POST['guess'] < $num_to_guess) {
    $message = "Your guess is too small! Try a larger number. ";    
}  else {
    $message = "Well Done!!";
}

$guess = $_POST['guess'] ?? "";
?>

<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="UTF=8">
        <title>Saving state with a hidden field</title>
    </head>
    <body>
        
        <h1><?php echo $message; ?></h1>

        <p>Attempts: <?php echo $num_tries; ?></p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p><strong>Type your Guess here:</strong>
                <input type="text" name="guess" value="<?php echo htmlspecialchars($guess); ?>"></p>

                <input type="hidden" name="num_tries" value="<?php echo $num_tries; ?>">

                <p><input type="submit" value="Submit your guess"></p>
        </form>
    </body>
</html>


