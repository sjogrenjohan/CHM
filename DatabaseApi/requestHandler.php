<?php

    include "productHandler.php";
    include "categoryHandler.php";
    include "newsLetterHandler.php";
    
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
                    $_POST["formProductWeight"]
                );
                echo json_encode($resultat);
                exit;
            }

            if($_POST["collectionType"] == "units") {
                $productHandler = new productHandler();
                $unit = $productHandler->updateProduct(
                    $_POST["prodID"],
                    $_POST["updateUnit"]
                );
                echo json_encode($unit);
                exit;
            }

            if($_POST ["collectionType"] == "delete") {
                $productHandler = new productHandler();
                $delete = $productHandler->deleteProduct(
                    $_POST["deleteProduct"]
                );
                echo json_encode($delete);
                exit;
            }

            if($_POST["collectionType"] == "categories") {
                $categoryHandler = new categoryHandler();
                $databaseResult = $categoryHandler->getCategory();
                echo json_encode($databaseResult);
                exit;
            }

            if($_POST["collectionType"] == "signUp") {
                $newletter = new NewsLetter();
                $newSignUp = $newletter->newsletterSignUp(
                    $_POST["signUpName"],
                    $_POST["signUpEmail"]
                );
                echo json_encode($_POST["signUpName"]);
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