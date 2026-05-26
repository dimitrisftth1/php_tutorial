<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="UTF-8">
        <title>Φόρμα Επικοινωνίας</title>
    </head>
    <body>
        
    <h2>Φόρμα Επικοινωνίας</h2>

    <form method="post">

        Όνομα:<br>
        <input type="text" name="name"><br><br>

        Μήνυμα:<br>
        <textarea name="message" rows="5" cols="30"></textarea><br><br>

        <input type="submit" value="Αποστολή">

    </form>

    <?php

    if(isset($_POST['name']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $message = $_POST['message'];

    echo "<h3>Το μήνυμά σας στάλθηκε.</h3>";

    echo "Όνομα: " . htmlspecialchars($name) . "<br><br>";

    echo "Μήνυμα:<br>";
    echo nl2br(htmlspecialchars($message));
    }
    ?>
    
    </body>
</html>