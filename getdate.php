<!DOCTYPE html>
<html>
    <head>
        <title>used of getdate() </title>
    </head>
    <body>
       
        <?php
        
        $date_array = getdate();

        foreach ($date_array as $key => $val) {
            echo $key . " = " . $val . "<br>";
        }
        echo "<hr>";

        echo "Today's date: " . $date_array['mday'] . "/" . $date_array['mon'] . "/" . $date_array['year'];


        ?>
    </body>
</html>