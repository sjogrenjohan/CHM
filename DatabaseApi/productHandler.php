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

        public function insertProduct($prodID) {
            $sql = "INSERT INTO products (`ProductID`, `UnitPrice`, `Name`, `Productdescription`, `ProductVolume`, `UnitsInStock`, `ProductWeight`, `ImageURL`) 
            VALUES ('$prodID', '250', 'Henrik', 'Ha', '4', '5', '150', 'NULL')";
            //$this->database->connection->exec($sql);
            /*$query = $this->database->connection->prepare("INSERT INTO products (`ProductID`, `UnitPrice`, `Name`, `Productdescription`, `ProductVolume`, `UnitsInStock`, `ProductWeight`, `ImageURL`) 
            VALUES ($prodID, '250', 'Henrik', 'Ha', '4', '5', '150', 'NULL'");
            $query->execute();*/
            $query = $this->database->connection->prepare($sql);
            $query->execute();
            

            /*if(empty($result)){
                return array("error"=>"Går ej att lägga till produkt");
            }*/
            return array("nisse" => $prodID);
         
        }

    }


?>