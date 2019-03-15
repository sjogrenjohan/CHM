<?php

    include "orderClass.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["action"] == "confirmOrder") {
                $confirm = new Order();
                $confirm = $confirm->addOrderInfo(
                    $_POST["orderName"], 
                    $_POST["orderAdress"], 
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