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
<h3>About Us</h3>
<div class="service"></div>
<p style="padding:30px"><strong>About us</strong> Japanese Sushi has developed through centuries of social and economic changes. It encompasses the regional and traditional foods of Japan.

The traditional sushi of Japan (和食 washoku?) is based on rice with miso soup and other dishes. There is an emphasis on seasonal ingredients. Side dishes often consist of fish, pickled vegetables, and vegetables cooked in broth. Seafood is common, often grilled, but also served raw as sashimi or in sushi. Seafood and vegetables are also deep-fried in a light batter, as tempura.

Apart from rice, staples include noodles, such as soba and udon. Japan has many simmered dishes such as fish products in broth called oden, or beef in sukiyaki and nikujaga. Foreign food—in particular Chinese food in the form of noodles in soup called ramen, fried dumplings, and gyōza—plus curry and hamburgers are commonly found in Japan.

Historically, the Japanese shunned meat, but with the modernization of Japan in the 1880s, meat-based dishes such as tonkatsu became common. asdasdasd</p>
</div>

<?php include("footer.php"); ?>