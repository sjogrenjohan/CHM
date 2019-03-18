<?php

    class category {

        function __construct() {
            include_once('databaseHandler.php');
            $this->database = new Database();
        }

        public function getCategory() {
            $query = $this->database->connection->prepare("SELECT * FROM categories;");
            $query->execute();
            $result = $query->fetchAll();
    
            if (empty($result)){
                return array("error"=> "No worky");
            }
            return $result;
        }
    }

?>