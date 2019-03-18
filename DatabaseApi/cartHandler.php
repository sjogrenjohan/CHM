<?php

    include "Class/cartClass.php";
    include "Class/countCartClass.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["collectionType"] == "addToCart") {
                $cart = new Cart();
                $cart->addToCart($_POST["productId"]);
                
                echo json_encode(true);
                exit;
            }
            
            if($_POST["collectionType"] == "getCartItems") {
                $cart = new Cart();
                $cartItems = $cart->getCartItems();
                
                echo json_encode($cartItems);
                exit;
            }

            if($_POST["collectionType"] == "count") {
                session_start();
                $count = new Count();
                echo json_encode($count->makeAmount($_SESSION["cart"])); 
                exit;
            }
            
            if($_POST["collectionType"] == "deleteCartItems") {
                $cart = new Cart();
                $result = $cart->removeAllItemsFromCart();
                echo json_encode($result);
            }

            if($_POST["collectionType"] == "deleteSingleItemInCart") {
                $cart = new Cart();
                $result = $cart->deleteSingleItemInCart();
                echo json_encode($result);
            }

        }catch(Exception $error) {
            http_response_code(500);
            echo json_encode($error->getMessage());
        }

    } else {
        echo json_encode("Not a POST request.");
    };
?>