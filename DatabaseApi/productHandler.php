<?php

    class productHandler {

        function __construct() {
            include_once('databaseHandler.php');
            $this->database = new Database();
        }

        // Get all students
        public function getProduct() {
            $query = $this->database->connection->prepare("SELECT * FROM products;");
            $query->execute();
            $result = $query->fetchAll();
    
            if (empty($result)){
                return array("error"=> "Hopp, produkten du ville åt finns inte");
            }
            return $result;
        }

        public function insertProduct($pID, $price, $name, $pDesc, $stock, $height, $width, $length, $weight) {
            $sql = "INSERT INTO `products`(`ProductID`, `Name`, `UnitPrice`, `ProductDescription`, `UnitsInStock`, `ProductHeight`, `ProductWidth`, `ProductLength`, `ProductWeight`) 
            VALUES ('$pID', '$price', '$name', '$pDesc', '$stock', '$height', '$width', '$length', $weight)";
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

    }


?>