<?php
	#Link the connection data
	require('Security/connection.php');


	if (isset($_GET['userid'])) {
		#Instatiate the Entered Variables
		#Allowing Password and Name fields to be empty
		$name = isset($_GET['name']) ? $_GET['name'] : '';
		$user_id = $_GET['userid'];
		$password = isset($_GET['pass']) ? $_GET['pass'] : '';

		#Enter into SQL records | Note: Vulnerable to SQL Injection
		$sql = "INSERT INTO WebSocial (name, user_id, pass) VALUES ('".$name."', '".$user_id."', '".$password."')";

	  #Establish Connetion and Add
		if ($conn->query($sql) == TRUE) {
			echo "You have been entered into the records";
		} else {
			echo "Error:".$sql."<br>".$conn->error;
		}

		$conn->close();
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>WebSocial</title>
	</head>
	<body>
		<h1>Registration</h1><br>
		<form method="get">
			NAME: <input type="text" name="name"><br>
			USER ID: <input type="text" name="userid"><br>
			PASSWORD: <input type="text" name="pass"><br>
			<input type="submit">
		</form>
	</body>
</html>
