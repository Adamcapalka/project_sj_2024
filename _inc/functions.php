<?php
require_once('config.php');
function generate_menu(array $pages) {
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu

    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li><a href = "'.$page_url.'">'.$page_name.'</a></li>';
    }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}

function add_styles() {
    //<!-- favicon -->
    echo '<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">';
    //google font
    echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">';
    echo '<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">';
    //fontawesome
    echo '<link rel="stylesheet" href="../assets/css/all.min.css">';
    //bootstrap
    echo '<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">';
    //owl carousel
    echo '<link rel="stylesheet" href="../assets/css/owl.carousel.css">';
    //magnific popup
    echo '<link rel="stylesheet" href="../assets/css/magnific-popup.css">';
    //animate css
    echo '<link rel="stylesheet" href="../assets/css/animate.css">';
    //mean menu css
    echo '<link rel="stylesheet" href="../assets/css/meanmenu.min.css">';
    //main style
    echo '<link rel="stylesheet" href="../assets/css/main.css">';
    //responsive
    echo '<link rel="stylesheet" href="../assets/css/responsive.css">';				
    }

    function add_scripts(){
        //jquery
        echo('<script src="../assets/js/jquery-1.11.3.min.js"></script>');
        //bootstrap
        echo('<script src="../assets/bootstrap/js/bootstrap.min.js"></script>');
        //count down
        echo('<script src="../assets/js/jquery.countdown.js"></script>');
        //isotope
        echo('<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>');
        //waypoints
        echo('<script src="../assets/js/waypoints.js"></script>');
        //owl carousel
        echo('<script src="../assets/js/owl.carousel.min.js"></script>');
        //magnific popup
        echo('<script src="../assets/js/jquery.magnific-popup.min.js"></script>');
        //mean menu
        echo('<script src="../assets/js/jquery.meanmenu.min.js"></script>');
        //sticker js
        echo('<script src="../assets/js/sticker.js"></script>');
        //main js
        echo('<script src="../assets/js/main.js"></script>');
        
    }

    function generate_products(int $n_rows, int $n_cols){
        $n_fruit_img = 1;
        $n_fruit_name = 0;
        $fruit_name = array("Strawberry", "Grape", "Lemon");
    
        // Prechádza cez každý riadok v mriežke portfólia
        for($i = 0; $i < $n_rows; $i++){
            echo('<div class="row">'); // Začiatok riadku
    
            // Pre každý stĺpec v aktuálnom riadku
            for($j = 0; $j < $n_cols; $j++){
                echo('<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">');
							echo('<div class="single-product-item">');
							echo('<div class="product-image">');
                            echo('<a href="single-product.php"><img src="../assets/img/products/product-img-'.$n_fruit_img.'.jpg" alt=""></a>');
							echo('</div>');
							echo('<h3>'.$fruit_name[$n_fruit_name].'</h3>');
							echo('<p class="product-price"><span>Per Kg</span> 35$ </p>');
                            echo('<a href="shop.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> To shop</a>');
                            echo('</div>');
							echo('</div>');
						
							$n_fruit_img++;
							$n_fruit_name++;
            }
    
            echo('</div>'); // Ukončuje riadok
        }
    }

    function generate_shop($n_rows, $n_cols){
        $n_fruit_img = 1;
        $n_fruit_name = 0;
        $fruit_name = array("Strawberry", "Grape", "Lemon", "Kiwi", "Apple", "Raspberry");
        $fruit_price = array(25, 30, 20, 35, 27, 32);
    
        // Prechádza cez každý riadok v mriežke portfólia
        for($i = 0; $i < $n_rows; $i++){
            echo('<div class="row">'); // Začiatok riadku
    
            // Pre každý stĺpec v aktuálnom riadku
            for($j = 0; $j < $n_cols; $j++){
                echo('<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">');
                echo('<form method="POST" action="">'); // Form for adding to cart
                echo('<div class="single-product-item">');
                echo('<div class="product-image">');
                echo('<img src="../assets/img/products/product-img-'.$n_fruit_img.'.jpg" alt=""></a>');
                echo('</div>');
                echo('<h3>'.$fruit_name[$n_fruit_name].'</h3>'); // Product name
                echo('<p class="product-price"><span>Per Kg</span> '.$fruit_price[$n_fruit_name].'$</p>'); // Product price
                echo('<input type="hidden" name="product_name" value="'.$fruit_name[$n_fruit_name].'">'); // Hidden input for product name
                echo('<input type="hidden" name="product_price" value="'.$fruit_price[$n_fruit_name].'">'); // Hidden input for product 
                echo('<input type="hidden" name="product_image" value=../assets/img/products/product-img-'.$n_fruit_img.'.jpg">');
                echo('<button type="submit" name="pridaj" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to cart</button>'); // Add to cart button
                echo('</div>');
                echo('</form>'); // End of form
                echo('</div>');
    
                $n_fruit_img++;
                $n_fruit_name++;
            }
    
            echo('</div>'); // Ukončuje riadok
        }
    }

    function generate_team(int $n_rows, int $n_cols){
        
        $n_team_img = 1;
        $n_team_name = 0;
        $team_name = array("Jimmy Doe", "Marry Doe", "Simon Joe");


        for($i = 0; $i<$n_rows;$i++){
            echo('<div class="row">');
            //sem pôjde cyklus po stĺpcoch
            for($j = 0; $j<$n_cols;$j++){
                echo('<div class="col-lg-4 col-md-6">');
                echo('<div class="single-team-item">');
                echo('<div class="team-bg team-bg-'.$n_team_img.'"></div>');
                echo('<h4>'.$team_name[$n_team_name].'<span>Farmer</span></h4>');
                echo('<ul class="social-link-team">');
                echo('<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>');
                echo('<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>');
                echo('<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>');
                echo('</ul>');
                echo('</div>');
                echo('</div>');
            
                $n_team_img++;
                $n_team_name++;
            }
            echo('</div>');
            
        }   
    } 
  
    function redirect_homepage(){
        header("Location: templates/home.php");
        die("Nepodarilo sa nájsť Domovskú stránku");
    }
    
    function db_connection(){
        try {
            //$pdo = new PDO('mysql:host=localhost;dbname=vaša_databáza', 'vaše_používateľské_meno', 'vaše_heslo');
            $connection = new PDO("mysql:host=".DATABASE['HOST'].";dbname=".DATABASE['DBNAME'].";charset=utf8", 
                                  DATABASE['USER_NAME'], 
                                  DATABASE['PASSWORD']);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $connection;
        }catch(PDOException $e){
            return 0;
            die("Chyba pripojenia k databáze: " . $e->getMessage());
        }
    }
    ?>