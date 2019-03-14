<?php

class Order {

    function __construct() {
        include_once('databaseHandler.php');
        $this->database = new Database();
    }

    public function addOrderInfo() {
        $query = $this->database->connection->prepare("SELECT  * FROM orders;");
        $query->execute();
        $result = $query->fetchAll();

        if (empty($result)){
            return array("error"=> "Finns ej några registrerade nyhetsbrevskunder");
        }
        return $result;
    }
}
?>