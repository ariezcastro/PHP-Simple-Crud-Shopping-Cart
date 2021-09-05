<?php

function load_data(){
	if(!empty($_POST)){
	$search = $_POST['search'];
	$searchresults = array_search($search, $sushi, true);
	}
	$sushi = array('1'=>'YUFUIN SUSHI MAKI BENTO', '2'=>'SPECIAL MAKI', '3'=>'MIX MORI', '4'=>'UNI SASHIMI', '5'=>'SHIME AJI NIGIRI SUSHI', '6'=>'RAINBOW MAKI');
	if(!empty($_POST)){
		if($searchresults != false){
		echo "<tr>";
			echo "<td><div class='img1'></div></td>";
			echo "<td class='ctd'><p class='plaintext'><strong>" . $sushi[$searchresults] . "</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac elementum sapien. Fusce tellus dolor, tempus vitae leo faucibus, congue pellentesque mauris. Nullam vitae tellus in tellus venenatis sagittis venenatis quis enim. In hac habitasse platea dictumst. Nullam feugiat lacinia nibh, eget facilisis nunc hendrerit nec. Donec ut sem orci. Curabitur magna tellus, dictum id nunc at, pretium sagittis libero. Cras justo massa, egestas a sollicitudin ut, vestibulum non nunc.. </p></td>";
		echo "</tr>";
		}
		else{echo "No Results found.";}						
	}else{
		foreach($sushi as $data){
		echo "<tr>";
			echo "<td><div class='img1'></div></td>";
			echo "<td class='ctd'><p class='plaintext'><strong>" . $data . "</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac elementum sapien. Fusce tellus dolor, tempus vitae leo faucibus, congue pellentesque mauris. Nullam vitae tellus in tellus venenatis sagittis venenatis quis enim. In hac habitasse platea dictumst. Nullam feugiat lacinia nibh, eget facilisis nunc hendrerit nec. Donec ut sem orci. Curabitur magna tellus, dictum id nunc at, pretium sagittis libero. Cras justo massa, egestas a sollicitudin ut, vestibulum non nunc.. </p></td>";
		echo "</tr>";
		} 
	}	
}
?>

<html>
<head>
<title>IZUSHI & ???</title>
<link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>
	<div class="align">
		<div class="navbar">
			<ul class="nav">
				<li class="active"><a href="index.html">HOME</a></li>
				<li><a href="menu.php?c=1">MENU</a></li>
				<li><a href="products.php?c=2">RECIPES</a></li>
				<li><a href="products.php?c=3">GRILLED</a></li>
				<li><a href="products.php?c=4">ABOUT</a></li>
				<li><a href="products.php?c=5">DELIVERY</a></li>
					<form action="#" method="POST"><br/>searchbar:
						<input type="text" placeholder="search" name="search">
						<input type="submit" name="submit">Search</a>
					</form>
			</ul>
						<a href="#">
							<div class="logo">
							</div>
						</a>			
		</div>
	</div>
		<div class="sidebar">
			<nav><br/><br/>
				<a href="products.php?c=1">SUSHI<br/><br/></a>
				<a href="products.php?c=2">DESSERT<br/></a><br/>
				<a href="products.php?c=3">DRINKS<br/></a><br/>
				<a href="products.php?c=4">CURRY<br/></a><br/>
				<a href="products.php?c=5">YAKINIKU<br/></a>
			</nav>
		</div>
	<a href="index.html">
		<div class="banner">
		</div>
	</a>
	<div class="bottoms">
		<div class="textboxs">
				<div class="styles">
					<h2>TASTY EATS THAT CANT BE BEAT!<br/><i></i></h2>
					<hr></hr>
				</div>
				
				
				<div class="position">
				<table >
					
					<?php load_data(); ?>
					
					
				</table>
				</div>
					<p><strong></strong> </p>
		</div>
	</div>
</body>
</html>