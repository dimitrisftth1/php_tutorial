<?php
    session_start();
?>
<html>
<head>
    <title>Session3 Accessing stored session variables</title>
</head>
<body>
<?php
    echo "Your chosen products are:";
    echo "<ul>
    <li>" . $_SESSION['product1'] . "</li>
    <li>" . $_SESSION['product2'] . "</li>
    <li>" . $_SESSION['product3'] . "</li>
    </ul>";
?>
</body>
</html>