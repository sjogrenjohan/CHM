<?php

    class CartHandler {

        function __construct() {
            session_start();
            include_once('databaseHandler.php');
            $this->database = new Database();
        }

        public function getCartItems() {
            $inBlock = $this->convertSessionCartToSQLInBlock();

            $query = $this->database->connection->prepare("SELECT * FROM products WHERE ProductID IN $inBlock;");
            $query->execute();
            $result = $query->fetchAll();

    
            if (empty($result)){
                return array("error"=> "Din kundvagn är tom");
            }
            return $result;
        }

        private function convertSessionCartToSQLInBlock() {
            $_SESSION["cart"];
            return "(1, 2)";
        }
        
        public function addToCart($product) {
            $this->initSession();

            if(isset($_SESSION["cart"][$product])) {
                $_SESSION["cart"][$product]++;
            } else {
                $_SESSION["cart"][$product] = 1;
            }

        }

        private function initSession() {
            if(empty($_SESSION["cart"])) {
                $_SESSION["cart"] = array();
            }

        } 
    }

?>