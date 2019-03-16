<?php

    include "orderClass.php";
<<<<<<< HEAD
=======
    include "cartHandler.php";
    
>>>>>>> df1f69c03bcd303711ef8e90900fa0c901126b4f

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["action"] == "confirmOrder") {
<<<<<<< HEAD
                $order = new Order();
                $confirm = $order->addOrderInfo(
                    $_POST["orderName"], 
                    $_POST["orderAdress"]
=======
                $cart = new CartHandler();
                $confirm = new Order();
                $confirm = $confirm->addOrderInfo($cart->getCartItems()
                    //$_POST["orderName"], 
                    //$_POST["orderAdress"], 
>>>>>>> df1f69c03bcd303711ef8e90900fa0c901126b4f
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