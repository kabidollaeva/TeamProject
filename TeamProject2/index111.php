<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
?>

<HTML>
<HEAD>
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading"></div>




<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM product ");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["id"]; ?>">
			<div class="mySlides fade"><img src="<?php echo $product_array[$key]["image1"]; ?>" width = "300" heigth = "300"></div>
			<div class="mySlides fade"><img src="<?php echo $product_array[$key]["image2"]; ?>" width = "300" heigth = "300"></div>
			<div class="mySlides fade"><img src="<?php echo $product_array[$key]["image3"]; ?>" width = "300" heigth = "300"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="product-price"><?php echo $product_array[$key]["recipe"]; ?></div>
			</div>
			</form>
		</div>
		
	<?php
		}
	}
	?>

</div>
</BODY>
</HTML>