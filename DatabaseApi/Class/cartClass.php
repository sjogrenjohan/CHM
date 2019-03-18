<?php

    class Cart{

        function __construct() {
            session_start();
            include_once('databaseHandler.php');
            $this->database = new Database();
        }

        public function getCartItems() {
            $cart = $_SESSION["cart"];
            $inBlock = $this->convertSessionCartToSQLInBlock($cart);
            $query = $this->database->connection->prepare("SELECT * FROM products WHERE ProductID IN $inBlock;");
            $query->execute();
            $result = $query->fetchAll();

            if (empty($result)){
                return array("error"=> "Din kundvagn är tom");
            }

            foreach ($result as $itemKey => $item) {
                foreach ($cart as $itemId => $nrOfItems) {
                    if ($item["ProductID"] == $itemId) {
                        $result[$itemKey]["nrOfItems"] = $nrOfItems;
                    }
                }
            }

            return $result;
        }

        private function convertSessionCartToSQLInBlock($cart) {
            $productIds = '(';

            foreach ($cart as $key => $value) {
                $productIds .= $key . ",";
            }

            $productIds = rtrim($productIds, ",");
            $productIds .= ")";

            return $productIds;
        }
        
        public function addToCart($product) {
            $this->initSession();

            if(isset($_SESSION["cart"][$product])) {
                $_SESSION["cart"][$product]++;
            } else {
                $_SESSION["cart"][$product] = 1;
            }
        }

        public function removeAllItemsFromCart() {
            unset($_SESSION['cart']);
            return true;
        }

        public function deleteSingleItemInCart() {
            $itemId = $_GET["itemId"];
            if (isset($_SESSION["cart"])) {
                foreach ($_SESSION["cart"] as $removeItem => $value) {
                    if($value["itemId"] == $itemId) {
                        unset($_SESSION["cart"][$removeItem]);
                    }
                }
            }
        }

        private function initSession() {
            if(empty($_SESSION["cart"])) {
                $_SESSION["cart"] = array();
            }
        } 
    }

?>