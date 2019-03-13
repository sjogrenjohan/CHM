<?php
include './DatabaseApi/orderListHandler.php';

$orders = new OrderListHandler();

$list = $orders->getOrderList(); 

echo json_encode($list);
    

?>