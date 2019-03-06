<?php

    include "productHandler.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["collectionType"] == "products") {
                $productHandler = new productHandler();
                $databaseResult = $productHandler->getProduct();
                echo json_encode($databaseResult);
                exit;
            }

            if($_POST["collectionType"] == "addProduct") {
                $productHandler = new ProductHandler();
                $addProductToDB = $productHandler->insertProduct($_POST["formProductID"]);
                echo json_encode($addProductToDB);
                exit;
            }

        } catch(PDOException $error) {
            http_response_code(500);
            echo json_encode($error->getMessage());
        }

    } else {
        echo json_encode("Not a POST request.");
    }

    

?>