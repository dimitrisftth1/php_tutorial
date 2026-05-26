<!DOCTYPE html>
<html>
    <head>
        <title>Listing 8.1 Demostrating type </title>
    </head>
    <body>
       
        <?php
        $red = 1;
        $green = 1;
        $blue = 1;
        
        printf("#%04X%04X%04X", $red, $green, $blue);
        printf("<br>\n%X%X%X", $red, $green, $blue);      

        ?>
    </body>
</html>