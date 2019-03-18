<?php

    header("Content-Type: application/json");
    include "./Class/orderListClass.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {   
            $order = new OrderList();
            $list = $order->GetOrdelist();
            echo json_encode($list);
            exit;
            
            }catch(PDOException $error) {
                http_response_code(500);
                echo json_encode($error->getMessage());
            }

    } else {
        echo json_encode(false);
    };

?>