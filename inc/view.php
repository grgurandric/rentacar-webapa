<div class="jumbotron">
<?php
	require 'connect.php';

	$upit= "SELECT * FROM korisnici";

	$conn=mysqli_connect($server, $username_server, $password_server, $dbName);

	$result = mysqli_query($conn, $upit);

	if (mysqli_num_rows($result)>0) {
		while($row=mysqli_fetch_array($result)){
			echo $row['ime'] . "  " . $row['prezime'] . "  " . $row['email'] . "  " . $row['username'] . "<br><br>";
		}
	}else{
		echo "Ne postoje podaci u bazi!";
	}
?>
</div>