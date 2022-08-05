<html>
<head>
<title> Activity 1 Array</title>
</head>
<body>
	<?php
	/* Δημιουργία φόρμας με πολλά ονοματα στα οποία το πρώτο γράμμα γίνεται 
	αυτόματα κεφαλαίο (ucwords) και ελέγχος του mail αν είναι σωστο (strstr)
	*/
	//δηλωση κλάσης
		class privacy {
			var $full_name = "dimitris margaritis";
			function setFull_name($f){
				$this -> full_name = $f;
			}
			var $email = "dimitris@ftthyahoo.gr";
			function setEmail($e){
				$this -> email = $e;
			}
			
			function myPrivacy() {
				//έλεγχος mail 
				if (strstr($this -> email,'@')) {
					//κεφαλαίο 1ο γραμμα με τη ucwords
						echo "- Thank you for your time. <br>						
							The name you gave us is: <b>".ucwords($this -> full_name). 
							"</b><br>
							Your email is: <b>".$this -> email. "</b><br><br>";
				} else {
					echo "<b>Wrong mail !!!</b> ". ucwords($this -> full_name)."<br><br>";
				}					
			}
		}
		//εκτυπωση στο φυλλομετρητή των στοιχειων 		
		$object1 = new privacy();
		$object1 -> myPrivacy();
		//δημιουργία νέων αντικειμένου
		$object2 = new privacy();
		$object2 -> setFull_name("Apostolos papadopoulos");
		$object2 -> setEmail("papadopoulos@gmail.com");
		$object2 -> myPrivacy();
		//
		$object3 = new privacy();
		$object3 -> setFull_name("nikolaos apostolopoulos");
		$object3 -> setEmail("apostolopoulosgmail.com");
		$object3 -> myPrivacy();
		//
		$object4 = new privacy();
		$object4 -> setFull_name("georgios dimitriou");
		$object4 -> setEmail("dimitriou@yahoo.com");
		$object4 -> myPrivacy();
	?>
</body>
</html>