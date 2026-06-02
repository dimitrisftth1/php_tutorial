<html>
<head>
    <title>Listing 11.5 Using include() to execute PHP and assign the return value</title>
</head>
    <body>
        <?php
            $addResult = include('listing11.6.php');
            echo "The include file returned $addResult";
        ?>
    </body>
</html>