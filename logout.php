<?php

session_start();

$_SESSION = [];

session_destroy();

?>

<html>
    <head>
        <title>Logout</title>
    </head>
    <body>
        <h1>Session Closed</h1>

        <p>You have logout.</p>

        <p>
            <a href="login.php">Return to login page</a>
        </p>
        
    </body>
</html>