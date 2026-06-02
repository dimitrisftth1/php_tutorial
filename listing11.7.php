<html>
<head>
<title>Listing 11.7 Using include() within a loop</title>
</head>
<body>
<?php
for ($x = 1; $x <= 3; $x++) {
    $incfile = "incfile$x.txt";
    echo "Attempting include $incfile<br>";
    include($incfile);
    echo "<br>";
}
?>
</body>
</html>