<?php
	include 'inc/insert.php';
?>
	<div clas= "contanier">
		<div class= "jumbotron">
			<form action="index.php?opcija=registracija" method="POST">
				
					
				
				<h2>Registracija</h2>
				Ime<br>
				<input type="text" name="ime" ><br>
				Prezime<br>
				<input type="text" name="prezime" ><br>
				E-mail<br>
				<input type="text" name="email" ><br>
				Korisničko ime<br>
				<input type="text" name="username" ><br>
				Lozinka<br>
				<input type="password" name="password"  ><br>
				<input type="submit" role="button" class="btn btn-primary"  name="registracija" value= "Registracija" style= "margin-top: 5px;">
				
			</form>
		</div>
	</div>
	