<?php
    include('partials/header.php');
    

    $user_object = new User();

    // Spracovanie údajov z formulára po odoslaní
    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Kontrola, či sa zadané heslá zhodujú
        if($password === $confirm_password) {
            // Volanie metódy register() na vytvorenie používateľa
            if($user_object->register($email, $password)) {
                // Registrácia bola úspešná
                echo "<p>Registrácia bola úspešná. Teraz sa môžete prihlásiť.</p>";
            } else {
                // Registrácia zlyhala
                echo "<p>Registrácia zlyhala. Skúste to prosím znova.</p>";
            }
        } else {
            // Heslá sa nezhodujú
            echo "<p>Heslá sa nezhodujú. Skúste to prosím znova.</p>";
        }
    }
?> <!-- search area -->
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
          <div class="col-100 text-center">
              <h1>Registrácia</h1>
              <form action="" method="POST">
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="password">Heslo:</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <label for="confirm_password">Zopakovať heslo:</label>
                    <br>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br>
                    <button type="submit" name="user_register">Registrovať sa</button>
                </form>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 