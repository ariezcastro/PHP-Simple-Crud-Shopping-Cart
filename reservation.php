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
<h3>Reservation</h3>
<p class="reservation"><strong>OUR HOURS</strong><br/>
We are <strong>OPEN DAILY</strong> from <strong>9AM - 12MID</strong><br/><br/>

Lunch Sets <strong>P185</strong> are available Everyday from <strong>11AM to 2PM</strong><br/><br/>

<strong>Yakiniku</strong> Time Every Night from <strong>5PM to 10PM</strong><br/>
<strong>CONTACT US</strong><br/>
<strong>For reservations, call (045) 625-5537</strong></p>
<div class="reserve">
<div class="reserves"></div>
<h3>Be Prepared:</h3>
<p>When trying to reserve, especially when new inventory becomes available, make sure you are already familiar with how to make a reservation, have a few preferred sites in mind and have your contact and credit card information on hand.

When you are reserving more than one spot, each spot must be reserved in a different permit holder’s name, as the system will not allow a specific person to reserve more than one spot. You will need to have the other party’s contact information ready (please ensure that person knows since they will be receiving the confirmation email)</p>
</div>

</div>

<?php include("footer.php"); ?>