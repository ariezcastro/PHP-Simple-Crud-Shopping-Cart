<?php
	session_start();
	if($_SESSION["user_name"]){
		include 'connect.php';
		$id_num = $_GET['id_num'];
		mysqli_query($conn, "DELETE FROM user WHERE id_num='$id_num'");
		header("location: setting.php");
	}
	else{
		header("location: login.php");
	}
?>