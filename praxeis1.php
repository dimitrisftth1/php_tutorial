

<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        
    <h1>Simple Calculator</h1>

    <form action="" method="post">
        <p>Number A: <input type="text" name="a"></p>
        <p>Number B: <input type="text" name="b"></p>
        <p><input type="submit" value="Calculate"></p>
    </form>
    <?php

        $a = $_POST['a'] ?? '';
        $b = $_POST['b'] ?? '';

        $result1 = "";
        $result2 = "";
        $result3 = "";
        $result4 = "";

        if ($a !== '' &&  $b !== '') {
            $a = (float)$a;
            $b = (float)$b;

            $result1 = "Addition: $a + $b = " . ($a + $b) . "<br>";
            $result2 = "Subtraction: $a - $b = " . ($a - $b) . "<br>";
            $result3 = "Multiplpication: $a * $b = " . ($a * $b) . "<br>";

            if ($b != 0) {
                $result4 .= "Division: $a / $b = " . ($a * $b) . "<br>";        
            } else {
                $result4 .= "Dimision: Not allowed (division by zero)<br>";
            }
        }
        echo $result1;
        echo $result2;
        echo $result3;
        echo $result4;
    ?>

 
    
    </body>
</html>