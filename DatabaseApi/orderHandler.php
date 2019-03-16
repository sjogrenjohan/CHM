<?php

    include "orderClass.php";
    include "cartHandler.php";
    

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["action"] == "confirmOrder") {
                $cart = new CartHandler();
                $confirm = new Order();
                $confirm = $confirm->addOrderInfo($cart->getCartItems()
                    //$_POST["orderName"], 
                    //$_POST["orderAdress"], 
                    //$_POST["orderProduct"], 
                    //$_POST["orderDate"], 
                    //$_POST["totalPrice"]
                );
                echo json_encode($confirm);
                exit;
            }
        }catch(PDOException $error) {
            http_response_code(500);
            echo json_encode($error->getMessage());
        }

    } else {
        echo json_encode("Not a POST request.");
    };
?>