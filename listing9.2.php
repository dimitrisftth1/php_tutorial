<?php

echo "<p>Welcome <b>" . htmlspecialchars($_POST['user'] ?? ''). "</b></p>";
echo "<p>Your address is:<br>" . nl2br(htmlspecialchars($_POST['address'] ?? '')). "</p>";
