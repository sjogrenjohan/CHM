<?php

class OrderListHandler {

    function __construct() {
        include_once('databaseHandler.php');
        $this->database = new Database();
    }

    public function getOrderList() {
        $query = $this->database->connection->prepare("SELECT  * FROM users;");
        $query->execute();
        $result = $query->fetchAll();

        if (empty($result)){
            return array("error"=> "Finns ej några registrerade nyhetsbrevskunder");
        }
        return $result;
    }
}

?>