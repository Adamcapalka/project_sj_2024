<

	<?php
	include_once('partials/header.php');
	?>
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			
<?php
$products_object=new Products();
$cart_object = new Cart();

if(isset($_POST['pridaj'])) {
	$name = $_POST['product_name'];
	$price = $_POST['product_price'];
	$image = $_POST['product_image'];
	$cart_object->addToCart($name, $price, $image);
	header('Location: shop.php'); 
	exit();

}

$products_object->generate_shop(2,3)
			
			?>
		</div>
	</div>
	<!-- end products -->

	

	<!-- footer -->
	<?php
	include_once('partials/footer.php');
	?>
	