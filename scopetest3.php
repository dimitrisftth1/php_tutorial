<html>
<head>
<title>Listing 6.7</title>
</head>
<body>
<?php
$life=42;
function meaningOfLife() {
	global $life;
	echo "The meaning of life is $life<br>";
}
meaningOfLife();
?>
</body>
</html>