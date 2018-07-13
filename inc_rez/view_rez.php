<?php
	require 'connect_rez.php';

	$upit= "SELECT * FROM rezervacije";

	$conn=mysqli_connect($server, $username_server, $password_server, $dbName);

	$result = mysqli_query($conn, $upit);

	if (mysqli_num_rows($result)>0) {
		while($row=mysqli_fetch_array($result)){
			echo $row['username'] . "  " . $row['model_tip'] . "  " . $row['preuzimanje'] . "  " . $row['povratak'] . "<br><br>";
		}
	}else{
		echo "Ne postoje podaci u bazi!";
	}
?>
</div>