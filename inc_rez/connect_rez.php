<?php
	$server='localhost';
	$username_server='root';
	$password_server='';

	$dbName='rent_a_car';

	$conn=mysqli_connect($server, $username_server, $password_server, $dbName);
	if ($conn==FALSE) {
		echo "Neuspješno povezivanje na server!<br>";
	}

?>