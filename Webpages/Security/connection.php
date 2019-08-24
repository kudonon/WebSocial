<?php
	#Enter this Information Yourself to Match your
	#Raspberry Pi Information.
	$servername = "localhost";
	$user = ""; //your MySQL Username (do not make root)
	$pass = ""; //your MySQL Password (do not make root)
	$database = "WebSocial"; //Database Name: Chosen as WebSocial for this Project
	#Establish Connection with MySQL
	$conn = new mysqli($servername, $user, $pass, $database);
	#Verification
	if ($conn->connect_error) {
		//Check for Error
		die("There was an error connecting to the database".$conn->connect_error);
	}

?>
