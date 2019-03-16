<?php

class Order {

    function __construct() {
        include_once('databaseHandler.php');
        $this->database = new Database();
    }

    /*public function addOrderInfo() {
        $query = $this->database->connection->prepare("SELECT  * FROM orders;");
        $query->execute();
        $result = $query->fetchAll();

        if (empty($result)){
            return array("error"=> "Finns ej registrerade beställningar");
        }
        return $result;
    }*/

    public function addOrderInfo($session) {
    
	$date = date('Y-m-d H:i:s');
	$costcount = 0;
	$totalCost = 0;
	$orderstatus = "in-progress";

	foreach ($session as $key) {

        $totalCost  += $key['UnitPrice'] * $key['nrOfItems'];

       
    }

	$query = $this->database->connection->prepare("INSERT INTO `orders`( `OrderStatus`, `DateAdded`, `TotalCost`) VALUES ('{$orderstatus}','{$date}','{$totalCost}')");	
    $query->execute();

    }	
    

}
?>