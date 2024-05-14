<?php
include('partials/header.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}
?>
<main><!-- search area -->
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
						<p>We sale fresh fruits</p>
						<h1>Admin</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                

                <?php
                    //print_r($_SESSION);
                    if($_SESSION['is_admin']==1){
                        include('partials/admin-kontakt.php');
                    }
                   

                ?>
                <div class="container">
        	
            <a href="logout.php" class="cart-btn btn-lg">Logout</a>
        </div>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>