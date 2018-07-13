<?php
	if(isset ($_GET ["opcija"])) {
		$file= $_GET["opcija"] . ".php";
		if (file_exists($file)){
			include_once ($file);
	}else{
		?>
			<div class= "alert alert-warning">
				<a href ="#" class= "close" data-dismiss="alert" aria-label= "close">&times;</a>
				<strong>GREŠKA</strong>Tražena stranica ne postiji! <br> Molimo Vas da se vratite na <a href= "index.php" calss= "alert-link">početnu stranicu</a>
			</div>
		<?php 
		} 



	} else{
		?>
			<div clas= "contanier">
				<div class= "jumbotron">
				
				<img src= "rc-2.jpg" class= "img-responsive"> 
			</div>

			</div>
		<?php
	}