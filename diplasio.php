<?php

//Synartisi gia ypologismo diplasiou
function diplasio($x) {
    return $x * 2;
}

$apotelesma = "";

//eleghos submit
if (isset($_POST['num'])) {
    $num = $_POST['num'];

    //eleghos an einai arithmos
    if (is_numeric($num)) {
        $apotelesma = "To diplasio einai: " . diplasio($num);
    } else {
        $apotelesma = "Paraklw dwse enan arithmo!";
        }
}

?>

<!DOCTYPE html>
<html lang="el">
    <head>
        <meta charset="UTF=8">
        <title>Ypologismos Diplasiou</title>
    </head>
    <body>
        
    <h2>Ypologismos Diplasiou</h2>

    <form method="post">
        Dwse enan arithmo:<br>
        <input type="text" name="num" id=""><br><br>
        <input type="submit" value="Ypologismos">
    </form>

    <?php
    //Emfanisi apotelesmatos
    if ($apotelesma !=""){
        echo"<p>$apotelesma</p>";
    }
    ?>
    
    </body>

</html>