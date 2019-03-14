<?php

    class productHandler {

        function __construct() {
            include_once('databaseHandler.php');
            $this->database = new Database();
        }

        public function getProduct() {
            $query = $this->database->connection->prepare("SELECT * FROM products;");
            $query->execute();
            $result = $query->fetchAll();
    
            if (empty($result)){
                return array("error"=> "Hopp, produkten du ville åt finns inte");
            }
            return $result;
        }

        public function insertProduct($pID, $price, $name, $pDesc, $stock, $height, $width, $length, $weight, $image) {
            $sql = "INSERT INTO `products`(`ProductID`, `Name`, `UnitPrice`, `ProductDescription`, `UnitsInStock`, `ProductHeight`, `ProductWidth`, `ProductLength`, `ProductWeight`, `ImageURL`) 
            VALUES ('$pID', '$price', '$name', '$pDesc', '$stock', '$height', '$width', '$length', '$weight', '$image')";
            $query = $this->database->connection->prepare($sql);
            $res = $query->execute();

            if($res == false){
                return array("error"=>"Går ej att lägga till produkt");
            }else{
                return array("Status:" => "Det gick bra");
            } 
        }

        public function updateProduct($prodID, $updateUnit) {
            $sql = "UPDATE `products` SET `UnitsInStock`= UnitsInStock + $updateUnit WHERE `ProductID`= $prodID";
            $query = $this->database->connection->prepare($sql);
            $res = $query->execute();

            if($res == false){
                return array("error"=>"Går ej att uppdatera lagersaldo");
            }else{
                return array("Status:" => "Lagersaldo uppdaterat");
            }
        }

        public function deleteProduct($prodID) {
            $sql = "DELETE FROM `products` WHERE `products` . `ProductID` = $prodID";
            $query = $this->database->connection->prepare($sql);
            $res = $query->execute();

            if($res == false){
                return array("error" => "Går ej att radera!");
            } else {
                return array("Status" => "produktID = $prodID är raderad.");
            }
        }

        public function getProductsInCategory($catID) {
            //$sql = "SELECT products.* FROM products JOIN `category_relations` ON products.ProductID = `category_relations`.ProductID WHERE `category_relations`.CategoryID = `G1`";
            $sql = "SELECT products.* FROM products JOIN category_relations ON products.ProductID = category_relations.ProductID WHERE category_relations.CategoryID = '$catID'";
            
            /*"SELECT products.* FROM products
            JOIN category_relations ON products.ProductID = category_relations.ProductID
            WHERE category_relations.CategoryID = '$catID'";*/

            $query = $this->database->connection->prepare($sql);
            $query->execute();
            $res = $query->fetchAll();

            if (empty($res)){
                return array("error"=> "Hopp, produkten du ville åt finns inte");
            }
            return $res;
        }

    }
?>