<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="UTF=8">
        <title>Βασικές Πράξεις</title>
    </head>
    <body>
        
    <h2>Υπολογισμος Βασικών Πράξεων</h2>

    <?php
    $tries = 0;

    if (isset($_POST['tries'])) {
        $tries = (int)$_POST['tries'] + 1;
    }
    ?>

    <form action="" method="post">
        Πρώτος αριθμός: 
        <input type="text" name="num1" id=""><br><br>

        Δεύτερος αριθμός: 
        <input type="text" name="num2" id=""><br><br>

        <input type="hidden" name="tries" value="<?php echo $tries; ?>">

        <input type="submit" value="Υπολογισμός">
    </form>
    

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<p>Πλήθος προσπαθειών: " .$tries . "</p>";

        echo "<h3>Αποτελέσματα</h3>";

        echo "Πρόσθεση: $num1 + $num2 = " . ($num1 + $num2) . "<br>";
        echo "Αφαίρεση: $num1 - $num2 = " . ($num1 - $num2) . "<br>";
        echo "Πολλάπλασιασμός: $num1 * $num2 = " . ($num1 * $num2) . "<br>";

        if ($num2 != 0) {
            echo "Διαίρεση: $num1 / $num2 = " . ($num1 / $num2) . "<br>";
        } else {
            echo "Διαίρεση: Δε γίνεται διαίρεση με το μηδέν.<br>";
        }
    } else {
        echo "<p>Πρέπει να δώσετε μόνο αριθμούς.</p>";
    }
    ?>



    </body>
</html>