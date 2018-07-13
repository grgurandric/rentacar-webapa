<?php
	include 'prijava_php.php';

?>
<div clas= "contanier">
	<div class= "jumbotron">
		<form action= "pocetna.php" method="POST" >
			<h3>Prijava</h3>
			Korisničko ime<br>
			<input type="text" name="username" required=""><br>
			Lozinka<br>
			<input type="password" name="password"><br>
			<input type="submit" role= "buton" class="btn btn-primary" name="login" value= "Prijava" style= "margin-top: 5px;">
		</form>
	</div>
</div>



