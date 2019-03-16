<?php

    include "orderClass.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["action"] == "confirmOrder") {
                $order = new Order();
                $confirm = $order->addOrderInfo(
                    $_POST["orderName"], 
                    $_POST["orderAdress"]
                );
                echo json_encode($confirm);
                exit;
            }
            if($_POST["action"] == "getShippingInfo") {
                
            }
        }catch(PDOException $error) {
            http_response_code(500);
            echo json_encode($error->getMessage());
        }

    } else {
        echo json_encode("Not a POST request.");
    };
?>