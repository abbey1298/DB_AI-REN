<?php
	$mysqli = new mysqli('localhost', 'root','', 'db_airen') or 
		die (mysqli_error($mysqli));
	if (isset($_POST['btnAdd'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
			// $hash = password_hash($password,  
   //        	PASSWORD_DEFAULT); 
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];

		$mysqli->query("INSERT into users (username, email, password, phone, gender) VALUES ('$username','$email','$password','$phone','$gender')") or die($mysqli->error);
		header("Location: login.php");
	}
?>