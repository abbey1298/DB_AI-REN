<?php
	$mysqli = new mysqli('localhost', 'root','', 'db_airen') or
	die (mysqli_error($mysqli));
	if (isset($_POST['login'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);


	$mysqli->query("INSERT into tbllogin (username, password) values ('$username', '$password')") or die($mysqli->error);
	header("Location: index.php");
	}

?>