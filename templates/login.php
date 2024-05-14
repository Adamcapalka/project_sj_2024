<?php
include_once('partials/header.php');
if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']==true){
    header('Location: admin.php');
}
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
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Fresh & Organic</p>
							<h1>Delicious Seasonal Fruits</h1>
							<div class="hero-btns">
								<a href="shop.php" class="boxed-btn">Fruit Collection</a>
								<a href="contact.php" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Prihlásenie</h1>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Vaše meno">
                    <br>
                    <input type="text" name="password" placeholder="Vaše heslo">
                    <br>
                    <input type="submit" value="Odoslať" name="user_login">
                </form>
                <?php
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password']; 

                        $user_object = new User();

                        $login_success = $user_object->login($email,$password);
                        //ak metóda vráti TRUE
                        if($login_success == true){
                            header('Location: admin.php');
                            die;
                        }else{
                            echo 'Nesprávne meno alebo heslo';
                        }

                    }
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php');
?>