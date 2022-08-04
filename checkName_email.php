<html>
<head>
<title>Activity 1 Ch8 Input_Data name, email</title>
</head>
<body>
<?php
/* φόρμα η οποία  δέχεται το πλήρες όνομα και τη διεύθυνση email του χρήστη. 
μετατροπή του 1ου γράμματος ονόματος σε κεφαλαίο. Ελέγχος 
ότι η διεύθυνση email που έχει ο χρήστης περιέχει το σύμβολο @ και 
εμφανίση προειδοποιητικό μύνημα εάν δεν υπάρχει. 
*/
$full_name = "dimitris margaritis";
$email = "dimitrisftth@yahoo.gr";

$full_name = ucwords($full_name);
echo "Your name is: "."<b>".$full_name."</b>"."<br>";
if (strstr($email, '@')) {
	echo "Your email is: ". "<b>".$email."</b>";
} else { 
	echo "Your email isn't right, please write the correct with <b>@</b>";
}							
?>
</body>
</html>