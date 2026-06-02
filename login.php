<?php

session_start();

if(isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: welcome.php");
    exit;
}

?>

<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1>Login</h1>

        <form action="" method="post">

        <p>
            <strong>Enter your name:</strong><br>
            <input type="text" name="username">
        </p>

        <p>
            <input type="submit" value="Login">
        </p>

        </form>
    </body>
</html>