<?php include("header.php"); ?>

<div class="content">
<?php if(isset($_SESSION["orders"])){ ?>
<div class="login">
		<div class="login-details"><?php if(isset($_SESSION["user_name"]))
		{
			echo "Welcome";
			} ?>
			<a class="admin" href="setting.php">
					<?php 
					error_reporting(0);
					if(isset($_SESSION["user_name"]))
				{ 
				?>
					<?php	if(isset($_SESSION["user_name"]))
					{ 
						echo " " . $_SESSION["user_name"]; 
						echo "</a>";
						

						} ?>	


				<div class="logout"><a href="logout.php">Sign out</a></div>
				<?php
			
		}else{ ?></a>
			Please <a href="login.php"><strong>Login</strong></a> or <a href="register.php"><strong>Register</strong></a>
			<?php } ?>
		</div>
	</div>	
	<h3>Order List</h3>
<table class="ordertable" border="1px">
	<tr>
		<th>Order</th>
		<th>Name</th>
		<th>Price</th>
		<th>Address</th>
		
	</tr>
	<?php 
		
		foreach($_SESSION["orders"] as $data){
	?>
		<tr>

			<td><strong><?php echo ($data["order"]); ?></strong></td>
			<td><?php echo ($data["name"]); ?></td>
			<td class="color"><?php echo ($data["price"]); ?></td>
			<td><i><?php echo ($data["address"]); ?></td>
			
		</tr>
	<?php 
			}	
	?>

</table>
<?php 
}else{
			echo "<h3>There are no orders yet.</h3>";
		}
?>
</div>

<?php include("footer.php"); ?>