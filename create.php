<?php
	error_reporting(0);
	session_start();
	if($_SESSION["user_name"])
	{
		include 'connect.php';
		$username = $_POST['user_name'];
		$password = $_POST['password'];
			if ($username!="" and $password!="") {
			mysqli_query($conn, "INSERT INTO user SET user_name='$username', password='$password'");
			header("location: setting.php");
		}
	}
include("header.php");
?>
<div class="content">	
<h3>Create User</h3>
<div class="form">
<form action="" method="POST" style="text-align:center;">
<table>
	<h4 style="text-align: center;">Add User</h4>	
		Username:<input type="text" name="user_name"><br/><br/>	
	
		Password:<input type="password" name="password"><br/><br/>
asdasdasdasdasdas
	
		<input type="submit" value="Create">

</table>
<a  class="reg" href="setting.php">« Redirect</a>
	</form>
</div>
</div>

<?php include("footer.php"); ?>
