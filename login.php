<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "sushi");
$result = mysqli_query($conn, "SELECT * FROM user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]. "'");
$row = mysqli_fetch_array($result);
if(is_array($row)){
$_SESSION["id_num"] = $row['id_num'];
$_SESSION["user_name"] = $row['user_name'];
}
else {
$message = "Invalid Username and Password!";
}
}
if(isset($_SESSION['id_num'])) {
	header("location:index.php");
}
?>

<form name="frmUser" method="post" action="">
<div class="message">
<?php
if($message!="") {
	
}
?>
<?php include("header.php"); ?>

<div class="content">
<h3>Login asdasdas</h3>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2"><strong>Login</strong></td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="user_name"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2">
<input type="submit" name="submit" value="Login"><br/>
Don't have an account? <a class="reg" href="register.php"><strong>Register</strong></a><br/><br/>
<div class="redhex">
<?php
echo $message; 
?>
</div>
</td>



</tr>
</table>
</form>
<?php include("footer.php"); ?>




