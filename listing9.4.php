<?php

echo "<p>Welcome <b>" . htmlspecialchars($_POST['user'] ?? ''). "</b></p>";
echo "<p>Your address is:<br>" . nl2br(htmlspecialchars($_POST['address'] ?? '')). "</p>";

echo "<p>Your products choices are: </p>";

if (!empty($_POST['products']) && is_array($_POST['products'])) {
    echo "<ul>";
    foreach ($_POST['products'] as $value) {
        echo "<li>" .htmlspecialchars($value) . "</li>";
    }
    echo "</ul>";
} 