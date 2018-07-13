<?php
	if (isset($_POST['login'])) {
		
		$username= $_POST['username'];
		$password= $_POST['password'];
	require 'connect.php';

	$upit= "SELECT * FROM korisnici WHERE username = '$username' ";

	$conn=mysqli_connect($server, $username_server, $password_server, $dbName);

	$result = mysqli_query($conn, $upit);

	if (mysqli_num_rows($result)>0) {
		while($row=mysqli_fetch_array($result)){
			echo  $row;
		}
	}else{
		echo "Ne postoje podaci u bazi!";
	}
}
?>