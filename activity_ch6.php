<html>
<head>
<title>Alphanumeric_board</title>
</head>
<body>
<?php
function tableBoard($Fname, $Sname, $myAdress, $myLocal) {
	echo "<table border=\"1\">";
	echo "<tr><td colspan=\"4\">Address of $Fname";
	echo "</td></tr>";
	echo "<tr><td>$Fname</td><td>$Sname</td><td>$myAdress</td><td>$myLocal</td></tr>";
	echo "</table>";
}
tableBoard("Tachiarhis", "Margaritis", "Vairamidi 10A", "Giannitsa");
?>
</body>
</html>