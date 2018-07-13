<?php
	//unos podataka preko forme u bazu
	
	if (isset($_POST['registracija'])) {
		$ime= $_POST['ime'];
		$prezime= $_POST['prezime'];
		$email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		



		require 'connect.php';


		
		if(!empty($username) AND !empty($password)){
			
			?>
			<div class= "alert alert-success">
				<a href ="#" class= "close" data-dismiss="alert" aria-label= "close">&times;</a>
				<strong>Uspješno ste se registrirali!</br>Idite na<a href= "pocetna.php" calss= "alert-link" style="margin-left: 10px;" >početnu stranicu.</a> <br></strong>
			</div>

			<?php
			$upit="INSERT INTO korisnici  (ime, prezime, email, username, password) VALUES ('{$ime}', '{$prezime}', '{$email}', '{$username}', '{$password}')";
							
			mysqli_query($conn, $upit);
		}else{
			?>
			<div class= "alert alert-danger">
				<a href ="#" class= "close" data-dismiss="alert" aria-label= "close">&times;</a>
				<strong>GREŠKA</strong>Niste unijeli sve podatke! <br> Molimo Vas pokušajte ponovo! <br>
			</div>
			<?php
		}
		

		


	}

