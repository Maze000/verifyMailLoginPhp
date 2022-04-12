<?php
	$server="localhost";
	$user="user";
	$password="password";
	$bd="db";

	$connection = mysqli_connect($server, $user, $password, $bd);
	
	if(!$connection){
		echo"Error";
	}
    ?>
