<?php
	//unos podataka preko forme u bazu

	if (isset($_POST['rezerviraj'])) {
		$username_rez= $_POST['username'];
		$model_tip= $_POST['model_tip'];

		$dan_pr= $_POST['dan_pr'];
		$mjesec_pr= $_POST['mjesec_pr'];
		$godina_pr= $_POST['godina_pr'];
		
		$dan_po= $_POST['dan_po'];
		$mjesec_po= $_POST['mjesec_po'];
		$godina_po= $_POST['godina_po'];

		$datum_pr= $godina_pr. "-" .$mjesec_pr. "-" .$dan_pr;
		$preuzimanje= date($datum_pr);

		$datum_po= $godina_po. "-" .$mjesec_po. "-" .$dan_po;
		$povratak= date($datum_po);



		



		require 'connect_rez.php';

		
		if(!empty($username_rez)AND !empty($model_tip)){

			?>
			<div class= "alert alert-success">
				<a href ="#" class= "close" data-dismiss="alert" aria-label= "close">&times;</a>
				<strong>Uspješno ste rezervirali automobil!</strong> <br>
			</div>

			<?php
			
			$upit="INSERT INTO rezervacije  (username, model_tip, preuzimanje, povratak) VALUES ('{$username_rez}', '{$model_tip}', '{$preuzimanje}', '{$povratak}')";
							
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