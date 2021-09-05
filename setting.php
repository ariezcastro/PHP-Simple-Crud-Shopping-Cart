<?php
error_reporting(0);
session_start();
	if($_SESSION['user_name']) {
		include 'connect.php';
		$query = mysqli_query($conn, "select * from user ORDER BY id_num ASC");
	
?>




<?php include("header.php"); ?>

<div class="content">
<h3>Control Panel</h3>	
<table class="acc-details">
		<tr>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th></th>
			<th>ACTION</th>
		</tr>
	<?php
	while ($row = mysqli_fetch_array($query))
	{
	?>
	<tr>
		<td class="fntweight"><?=$row['user_name']?></td>
		<td class="redhex"><?=md5($row['password'])?></td>
		
		<div>
			<td class="hex-orange">
				<a href="edit.php?id_num=<?=$row['id_num']?>">Edit</a>
			</td>
		</div>

		<div>
			<td class="logout">
				<a href="delete.php?id_num=<?=$row['id_num']?>">Delete</a>
			</td>
		</div>
		
		<div>
			<td class="hex-green">
				<a href="create.php">Create</a>
			</td>
		</div>
	</tr>
	<?php
	}
	?>
</table><br/><br/>

		
<div class="form">
<a class="reg" href="index.php">« Redirect</a>
</div>
</div>


<?php include("footer.php"); ?>
<?php
	}

?>