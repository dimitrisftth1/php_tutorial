<!DOCTYPE html>
<html>
    <head>
        <title>Listing 8.1 Demostrating type </title>
    </head>
    <body>
       
        <?php
        $number = 543;


        printf("Decimal: %d<br>", $number);
        printf("Binary: %b<br>", $number);
        printf("Double: %f<br>", $number);
        printf("Octal: %o<br>", $number);
        printf("String: %s<br>", $number);
        printf("Hex (lower): %x<br>", $number);
        printf("Hex (upper): %X<br>", $number);                        
        ?>
    </body>
</html>