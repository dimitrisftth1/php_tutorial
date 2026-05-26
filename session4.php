<?php
session_start();
?>
<html>
<head>
<title>Session.4 Storing an array in a session</title>
</head>
<body>
<h1>Product Choice Page</h1>
<?php
if (isset($_POST['form_products'])) {
if (!empty($_SESSION['products'])) {
$products = array_unique(
array_merge($_SESSION['products'], $_POST['form_products'])
);
$_SESSION['products'] = $products;
} else {
$_SESSION['products'] = $_POST['form_products'];
}
echo "<p>Your products have been registered!</p>";
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<p><strong>Select some products:</strong><br>
<select name="form_products[]" multiple size="3">
<option value="Sonic Screwdriver">Sonic Screwdriver</option>
<option value="HAL 2000">HAL 2000</option>
<option value="Tardis">Tardis</option>
<option value="ORAC">ORAC</option>
<option value="Transporter bracelet">Transporter bracelet</option>
</select>
</p>
<p><input type="submit" value="choose"></p>
</form>
<p><a href="session5.php">go to content page</a></p>
</body>
</html>