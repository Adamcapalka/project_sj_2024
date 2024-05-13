<?php
  require('../_inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>
	
	<?php
     $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
      $page_object = new Page();
      $page_object->set_page_name($page_name);
      echo($page_object->add_stylesheet());
    ?>

</head>
<body>
<!--PreLoader-->
<div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="home.php">
								<img src="../assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								
								
								<?php
            $pages = array('Home'=>'home.php',
            'About'=>'about.php',
            'Contact'=>'contact.php',
            'Shop'=>'shop.php', 
			'Cart'=>'cart.php' 
            );

            $menu_object  = new Menu($pages);
           echo($menu_object->generate_menu());
			?>				
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->