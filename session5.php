<?php
session_start();
?>
<html>
<head>
<title>Session.5 Accessing session variables</title>
</head>
<body>
<h1>Content Page</h1>
<?php
if (isset($_SESSION['products'])) {
    echo "<strong>Your cart:</strong><ol>";
    foreach ($_SESSION['products'] as $p) {
        echo "<li>$p</li>";
    }
        echo "</ol>";
}
?>
<p><a href="session4.php">return to product choice page</a></p>
</body>
</html>