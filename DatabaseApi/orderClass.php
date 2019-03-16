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

    public function addOrderInfo($name, $adress) {
        $cart = $_SESSION["cart"];
        $unitPrices = $this->getUnitPriceForProducts();
        //$pris = $unitPrices[0]->UnitPrice;
        
        //return array("ett pris" => $pris);
        
	    $date = date('Y-m-d H:i:s');
	    $costcount = 0;
	    $totalCost = 0;
        $orderstatus = "in-progress";
        
        $pricesArr = array();
        $nrOfItemsArr = array();
        $index = 0;

	    foreach ($unitPrices as $Key => $product) { 
            $pricesArr[$index] = $product["UnitPrice"];      
            $index++;
        }

        $index = 0;
        foreach ($cart as $itemId => $nrOfItems) {
            $nrOfItemsArr[$index] = $nrOfItems;
            $index++;
        }

        $arrLength = count($pricesArr);
        
        for($x = 0; $x < $arrLength; $x++){
            $totalCost +=  ($pricesArr[$x] * $nrOfItemsArr[$x]);
        }
        
	    $sql = "INSERT INTO orders(Name, Adress , orderStatus, DateAdded, TotalCost) 
        VALUES ('$name', '$adress', '$orderstatus', '$date', '$totalCost')";	
        $query = $this->database->connection->prepare($sql);
        $res = $query->execute();

        if($res == false){
            return array("error"=>"Går ej att lägga till order");
        }else{
            return array("Status:" => "Det gick bra att lägga order");
        }
    }
    
    private function getUnitPriceForProducts(){

        $cart = $_SESSION["cart"];
        //
        $productIds = '(';

        foreach ($cart as $key => $value) {
            $productIds .= $key . ",";
        }

        $productIds = rtrim($productIds, ",");
        $productIds .= ")";
        //
        $query = $this->database->connection->prepare("SELECT UnitPrice FROM products WHERE ProductID IN $productIds;");
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC); 
        $result = $query->fetchAll();

        return $result;
        
    }

}
    

?>