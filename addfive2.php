<html>
<head>
<title>Listing 6.13</title>
</head>
<body>
<?php
function addFive(&$num) {
	$num = $num + 5;
}
$orignum = 10;
addFive($orignum);
echo $orignum;
?>
</body>
</html>
