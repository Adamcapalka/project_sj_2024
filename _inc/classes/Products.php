<?php

    class Products{
       

        

        

       
        
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
        
        
}
?>