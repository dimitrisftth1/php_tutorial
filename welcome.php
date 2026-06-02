<?php

session_start();

?>

<html>
    <head>
        <title>Welcome Page</title>
    </head>
    <body>
        <h1>Welcome Page</h1>
        
        <?php

        if (isset($_SESSION['username'])) {
            echo "<p>Welcome " . htmlspecialchars($_SESSION['username']) . "</p>";

        } else {
            echo "<p>No active session found.</p>";
        }

        ?>

        <p>
            <a href="logout.php">Logout</a>
        </p>
    
    </body>
</html>

