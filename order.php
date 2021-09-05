<?php 
include("header.php"); 

if(!empty($_POST)){
	if(!isset($_SESSION["orders"])){
		$_SESSION["orders"] = array();
	}
	$orders = $_SESSION["orders"];

	$order = array("id"=>$_POST["id"], "order"=>$_POST["order"], "name"=>$_POST["fname"]." ".$_POST["lname"], "price"=>$_POST["price"], "address"=>$_POST["address"]);
	array_push($orders, $order);
	$_SESSION["orders"] = $orders;

	print_r($_SESSION["orders"]);
	
	header("Location: thankyou.php");
}

$items = array(
	array("id"=>"1", "name"=>"Maki Sushi Roll", "price"=>"$15.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"2","name"=>"Tuna Sushi Roll", "price"=>"$10.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"3", "name"=>"Squid Sushi Roll", "price"=>"$5.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"4", "name"=>"Kani Sushi Roll", "price"=>"$12.00", "image"=>"maki-sushi-roll.png"),
	array("id"=>"5", "name"=>"California Sushi Roll", "price"=>"$20.00", "image"=>"maki-sushi-roll.png"),	
	);
	$arraycolumn = array_map(function($element){ return $element['id']; }, $items);
	$key = array_search($_GET["id"], $arraycolumn);

	$currentItem = $items[$key];
	$id = $currentItem["id"];
	$order = $currentItem["name"];
	$price = $currentItem["price"];
	$image = $currentItem["image"];
?>

<div class="content">
	<h3>Order Form</h3>
	<div class="orderform">
		<h3><?php echo $order; ?></h3>
		<h4 class="color">Price: <?php echo $price; ?></h3>
		<img src="images/<?php echo $image; ?>" width="300px" />
		<form action="#" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="price" value="<?php echo $price; ?>">
			<input type="hidden" name="order" value="<?php echo $order; ?>">
			<label><h3>Firstname</h3></label>
			<input class="textbox" type="text" name="fname">
			<label><h3>Lastname</h3></label>
			<input class="textbox" type="text" name="lname">
			<label><h3>Address</h3></label>
			<textarea name="address"></textarea>
			<input type="submit" value="Place Order">
		</form>
	</div>
</div>

<?php include("footer.php"); ?>