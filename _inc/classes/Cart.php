<?php

    class Cart extends Database{
        private $db;
        
        public function __construct(){
            $this->db = $this->db_connection();        
        }

        public function select(){
            try{
                $db_query = "SELECT * FROM cart";
                $query =  $this->db->query($db_query);
                $cart = $query->fetchAll();
                return $cart;

            }catch(PDOException $e){
                echo($e->getMessage());
            }   
        }

       
        
        public function updateQuantity($product_id, $quantity) {
            try {
                $data = array(
                    'product_id' => $product_id,
                    'quantity' => $quantity
                );
                $query = "UPDATE cart SET quantity = :quantity WHERE id = :product_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addToCart($name, $price, $image) {
            try {
                $data = array(
                    'name' => $name,
                    'price' => $price,
                    'image' => $image,
                );
                $query = "INSERT INTO cart (name, price, quantity, image) VALUES (:name, :price, 1, :image)"; // Removed 'id = NULL'
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function delete(){
            try{
                $data = array(
                    'product_id' => $_POST['delete-product'] 
                );
                $query = "DELETE FROM cart WHERE id = :product_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        public function generate_cart(){
            $cart = $this->select();
            $result = '';
            
            for ($i=0; $i<count($cart); $i++){
                $result .= '<form method="POST" action="cart.php">';
        $result .= '<tr class="table-body-row">';
        $result .= '<td class="delete-product"><button type="submit" name="delete-product" value="'.$cart[$i]->id.'"><i class="far fa-window-close"></i></button></td>';
        $result .= '<input type="hidden" name="product_id" value="'.$cart[$i]->id.'">'; 
        $result .= '<td class="product-image"><img src="'.$cart[$i]->image.'" alt=""></td>';
        $result .= '<td class="product-name">' . $cart[$i]->name . '</td>';
        $result .= '<td class="product-price">' . $cart[$i]->price . '</td>';
        $result .= '<td class="product-quantity"><input type="number" id="quantity" name="quantity" value="'. $cart[$i]->quantity .'" placeholder="' . $cart[$i]->quantity . '"></td>';
        $result .= '<td class="product-quantity"><input type="submit" name="edituj"></td>';
       
        $result .= '</tr>';
        $result .= '</form>';
        
        
            }
            
            return $result;
            
          
        }
       
        
}
?>