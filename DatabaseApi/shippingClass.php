<?php

class Shipping {

    function __construct() {
        session_start();
        include_once('databaseHandler.php');
        $this->database = new Database();
    }

    public function getShipDet() {
        $query = $this->database->connection->prepare("SELECT * FROM shipping_details;");
        $query->execute();
        $result = $query->fetchAll();

        if (empty($result)){
            return array("error"=> "Finns ingen fraktinformation");
        }
        return $result;
    }
}
?>