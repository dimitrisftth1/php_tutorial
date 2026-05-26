<!DOCTYPE html>
<html>
    <head>
        <title>Δραστηριότητα1 Μαθ 10 php </title>
    </head>
    <body>
        <form method="post">
            Ονοματεπώνυμο: <input type="text" name="name"><br><br>
            Email: <input type="text" name="email"><br><br>
            <input type="submit" value="Υποβολή">
        </form>

        <?php
        
        if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];

            //Μορφοποιηση
            // ολα μικρα και 1ο γραμμα κεφαλαίο
            $name = ucwords(strtolower($name));

            //Έλεγχος email
         if (strpos($email, "@") !== false) {
            echo "Ονοματεπώνυμο: " . $name. "<br>";
            echo "Email: " . $email. "<br>";
            echo "Το email είναι σωστό";
         } else {
            echo"Λαθος, πρεπει να περιέχει @";
            }
        }

        
        ?>
    </body>
</html>