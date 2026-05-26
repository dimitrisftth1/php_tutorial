<?php

$num_to_guess = 42;
$max_tries = 5;
$message = "";
$game_over = false;
//tries counter
//$num_to_tries = isset($_POST['num_tries']) ? (int)$_POST['num_tries'] + 1 : 0;

if (isset($_POST['num_tries'])) {
    $num_tries = (int)$_POST['num_tries'];
} else {
    $num_tries = 0;
}

$guess = $_POST['guess'] ?? "";

if(!isset($_POST['guess'])) {
    $message = "Kalws irthes sto paixnidi mantematos arithmou!";
} else {
    if ($guess == "") {
        $message = "Den edwses arithmo!!!";
    } elseif (!is_numeric($guess)) {
        $message = "prepei na dwseis arithmo";
    } else {
        $num_tries++;

        if ((int)$guess > $num_to_guess) {
            $message = "Your guess is too big! Try a smaller number. ";    
        } elseif ((int)$guess < $num_to_guess) {
            $message = "Your guess is too small! Try a larger number. ";    
        }  else {
            header("Location: congrats1.html");
            exit;
        }

        if ($num_tries >= $max_tries) {
            $message = "You Lost, more than 5 tries!!!";
            $game_over = true;
        }
    }

}


?>

<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="UTF=8">
        <title>paihnidi mantematos</title>
    </head>
    <body>
        
        <h1><?php echo $message; ?></h1>

        <p>Attempts: <?php echo $num_tries; ?> / <?php echo $max_tries; ?></p>

        <?php if(!$game_over) { ?>

        <form method="POST">
            <p><strong>Dwse arithmo</strong></p>

            <input type="text" name="guess" value="<php echo htmlspecialchars($guess); ?>">

            <input type="hidden" name="num_to_tries" value="<php echo $num_to_tries; ?>">

            <p>
                <input type="submit" value="Check">
            </p>
        </form>

        <p>
            <a href="<?php echo $_SERVER['PHP_SELF']"; ?>">Play Again</a>
        </p>

        <?php } ?>
    </body>
</html>


