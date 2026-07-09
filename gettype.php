<!DOCTYPE html>
<html>
<head>
<title>Types of variable</title>
</head>
<body>
<?php
$testing; 
echo gettype($testing);
echo "<br>";
$testing = 5;
echo gettype($testing);
echo "<br>";
$testing = "5";
echo "**" . gettype($testing);
echo "<br>";
$testing = "five";
echo gettype($testing);
echo "<br>";
$testing = 5.0;
echo gettype($testing);
echo "<br>";
$testing = true;
echo gettype($testing);
echo "<br>";

?>
</body>
</html>