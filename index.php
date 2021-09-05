<?php include("header.php"); ?>

<div class="content">
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
<h3>Home</h3>
<div class="theme">
<h1>TASTE OF SUSHI</h1>
</div>
<table class="table">
<tr>
<td class="td">
<div class="sushi"></div>
</td>
<<td class="td">
<p class="definition"><strong>Sushi</strong> is the Japanese preparation and serving of cooked vinegared rice combined with varied ingredients
 , chiefly seafood, vegetables, meat (usually fish), and occasionally tropical fruits. Styles of sushi and its presentation vary widely, but the key ingredient in all cases is the rice, also referred to as shari or sumeshi</p>
 </td>
</tr>
<tr>
<td class="td">
<p class="definition">Sushi can be prepared with either brown or white rice. It is often prepared with raw seafood, but some common varieties of sushi use <strong>cooked</strong> ingredients, and many other sorts are vegetarian. Sushi is often served with pickled ginger, wasabi, and soy sauce. Daikon radish is popular as a garnish.</p>
</td>
<td class="td">
<div class="sushi1"></div>
</td>
</tr>
</table><br/><br/><br/><br/><br/><br/>
</div>
<?php include("footer.php"); ?>