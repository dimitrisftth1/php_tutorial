<?php
session_start();
?>

<html>
    <head>
        <title>Session Start eg</title>
    </head>

    <body>
        <?php
            echo "<p>Your session ID is " . session_id() . "</p>";

        ?>
    </body>
</html>