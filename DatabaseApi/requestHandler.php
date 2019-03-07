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
                $resultat = $productHandler->insertProduct(
                    $_POST["formProductID"], 
                    $_POST["formProductName"], 
                    $_POST["formUnitPrice"], 
                    $_POST["formProductDesc"], 
                    $_POST["formUnitsInStock"], 
                    $_POST["formProductHeight"], 
                    $_POST["formProductWidth"], 
                    $_POST["formProductLength"], 
                    $_POST["formProductWeight"]);
                echo json_encode($resultat);
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