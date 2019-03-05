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

    }


?>