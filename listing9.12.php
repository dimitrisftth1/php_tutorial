<html>
<head>
<title>Sending the Simple Feedback Form - HTML Version</title>
</head>
<body>
<?php
echo "<p>Thank you, " . htmlspecialchars($_POST['name'] ?? '') . ", for your message!</p>";
echo "<p>Your email address is: " . htmlspecialchars($_POST['email'] ?? '') . "</p>";
echo "<p>Your message was:<br>" . nl2br(htmlspecialchars($_POST['message'] ?? '')) . "</p>";
// δημιουργία HTML μηνύματοσ
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
$msg
= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
$msg .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
$msg .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
// ρυθμίςεισ email
$recipient = "yourdomain.com";
$subject = "Form Submission Results";
// κεφαλίδεσ για HTML email
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: webmaster@yourdomain.com\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
// αποςτολή
mail($recipient, $subject, $msg, $headers);
?>
</body>
</html>