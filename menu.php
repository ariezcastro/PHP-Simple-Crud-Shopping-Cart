<?php 
include("header.php"); 

function loadMenuItems(){

$items = array(
	array("id"=>"1", "name"=>"Maki Sushi Roll", "price"=>"$15.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"2","name"=>"Tuna Sushi Roll", "price"=>"$10.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"3", "name"=>"Squid Sushi Roll", "price"=>"$5.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"4", "name"=>"Kani Sushi Roll", "price"=>"$12.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"5", "name"=>"California Sushi Roll", "price"=>"$20.00", "image"=>"maki-sushi-roll.png"),	
	);

	foreach($items as $item){

		echo'<table cellpadding="5" cellspacing="0">';
		echo'<tr>';
		echo'<td rowspan="5"><img src="images/'.$item["image"].'" width="150px"></td>';
		echo'</tr>';
		echo'<tr>';
		echo'<td><strong>'.$item["name"].'</strong></td>';
		echo'</tr>';
		echo'<tr>';
		echo'<td class="color">'.$item["price"].'</td>';
		echo'</tr>';
		echo'<tr>';
		echo'<td class="size">nori (seaweed), omelette, soy paper, cucumber, or shiso.</td>';
		echo'</tr>';
		echo'<tr>';
		echo'<td><a class="icon" href="order.php?id='.$item["id"].'">Order Now »</a></td>';
		echo'</tr>';
		echo'</table>';

	}
}

?>


<div class="content">
	<div class="sidebar">
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
	<h3>Menu</h3>
	<?php loadMenuItems(); ?>
	</div>
</div>

<?php include("footer.php"); ?>