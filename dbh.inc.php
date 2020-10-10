<?php



$dbServername = 'localhost';
$dbUsername = 'root';//wecarei5_wp315
$dbPassword = '';//73fM8pc.S
$dbName = 'test';//wecarei5_wp315

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);//creates the connection to the database and server

	if (mysqli_connect_errno())
	{
		echo "MySQL Connection Error: " . mysqli_connect_error();
	}//will through a warning if it does not connect mostly for testing purposes
