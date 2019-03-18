<?php

class Order {

    function __construct() {
        session_start();
        include_once('databaseHandler.php');
        $this->database = new Database();
    }

    public function addOrderInfo($name, $adress) {
        $cart = $_SESSION["cart"];
        $unitPrices = $this->getUnitPriceForProducts();
        
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

    public function updateStockInOrder(){

        $cart = $_SESSION["cart"];
 
         $prodIDArr = array();
         $nrOfItemsArr = array();
         
         $index = 0;
 
         //Hämta prodID och antal produkter för varje prodID från kundvagnen
         foreach ($cart as $prodID => $nrOfItems) { 
            $prodIDArr[$index] = $prodID;
            $nrOfItemsArr[$index] = $nrOfItems;
            $index++;
        }
 
         $arrLength = count($prodIDArr);


        for($i = 0;$i < $arrLength;$i++){

            $nrOfItems = $nrOfItemsArr[$i];
            $prodID = $prodIDArr[$i];
 
            //DETTA FUNKAR!!!!!!
            $sql = "UPDATE products SET UnitsInStock = UnitsInStock - '$nrOfItems' WHERE ProductID = '$prodID'";
             
            $query = $this->database->connection->prepare($sql);
 
            $query->execute();

        }
        return "blaj";
 
    }
}

?>