<?php
	#If cookies show already logged in, redirect to welcome page
	require('check.php');
	include('string.php');

	#Start Cookies
	session_start();
	#Require for Connection
	require('database.php');

	#Instantiate to nothing
	$userid = $password = "";


	if (isset($_POST['user_id'])) {
		#Set input equal to query variables and create the queries
		$userid = trim($_POST['user_id']);
		$password = trim($_POST['pass']);

		$query = "SELECT * FROM testdat and user_id='$userid' and pass='$password'";
		$bit = "SELECT * FROM testdat WHERE user_id='$userid' and pass='$password'";

		#Query the given variables and check
		$result = mysqli_query($conn, $query);
		$rows = mysqli_num_rows($result);

		#Get Name of the User for a welcome message
		$name = mysqli_query($conn, "SELECT * FROM testdat WHERE user_id='$userid'");

		#If there is such a user avaiable, set session cookies to reflect the information
		if ($rows == 1) {

			$_SESSION['user_id'] = $userid;
			#Get name from the database
			$_SESSION['name'] = returnString($name,'NAME');
			header("location: welcome.php");

		} else {
			#Else point the user to the refreshed page to try again.
			echo "<h3> Password is Incorrect <a href=\"login.html\">Try Again</a></h3>";

		}
	}


?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<h1>Login Page</h1><br>
		<form method="post">
			USER ID: <input type="text" name="user_id"><br>
			PASSWORD: <input type="password" name="pass"><br>
			<input type="submit" value="Log In">
		</form>
	</body>
</html>
