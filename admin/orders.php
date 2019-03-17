<?php
include '../DatabaseApi/orderClass.php';

$orders = new Order();

$list = $orders->GetOrdelist(); 

echo json_encode($list);
    

?>