<?php
	error_reporting(0);
	session_start();
	if($_SESSION["user_name"]){

		include 'connect.php';
		
		$query = mysqli_query($conn, "SELECT * FROM user WHERE id_num='".$_GET['id_num']."'");
		$row = mysqli_fetch_array($query);
?>

	


<?php include("header.php"); ?>

<div class="content">
<h3>Edit User</h3>
	<div class="form">
		<form action="" method="POST">
				<h4 style="text-align: center;">Edit User</h4>
			<input type="hidden" name="id_num" value="<?=($_GET['id_num'])?$_GET['id_num']:''?>">
				Username:<input type="text" name="user_name" value="<?=$row['user_name']?>"><br/><br/>
				Password:<input type="password" name="password" value="<?=$row['password']?>"><br/><br/>
			<input type="submit" value="Edit">
		</form><br/><br/>
		<a  class="reg" href="setting.php">« Redirect</a>
	</div>
</div>
<?php
	include("footer.php");
	$username = $_POST['user_name'];
	$password = $_POST['password'];
	$id_num = $_POST['id_num'];
	if($username!="" and $password!="")
	{
		mysqli_query($conn, "UPDATE user SET user_name='$username', password='$password' WHERE id_num='$id_num'");
		header("location: setting.php");
	}
}
	else{
		header("location: login.php");
	}
?>