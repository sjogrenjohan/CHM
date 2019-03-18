<?php
include_once('./databaseHandler.php');

class OrderList {

    function __construct() {
        $this->database = new Database();
    }

    public function GetOrdelist(){
            $query = $this->database->connection->prepare("SELECT * FROM orders;");
            $query->execute();
            $result = $query->fetchAll();
            //$result = true;
    
            if (empty($result)){
               // return array("error"=> "finns inga beställningar");
               return "vi hittar inte order";
            }
            return $result;
    }
}

?>