<?php

    include "Class/productClass.php";
    include "uploadImage.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["collectionType"] == "products") {
                $productHandler = new product();
                $databaseResult = $productHandler->getProduct();
                echo json_encode($databaseResult);
                exit;
            }

            if($_POST["collectionType"] == "addProduct") {
                $productHandler = new Product();

                $savedImageName = saveImage($_FILES["formProductImage"]);

                $resultat = $productHandler->insertProduct(
                    $_POST["formProductID"], 
                    $_POST["formProductName"], 
                    $_POST["formUnitPrice"], 
                    $_POST["formProductDesc"], 
                    $_POST["formUnitsInStock"], 
                    $_POST["formProductHeight"], 
                    $_POST["formProductWidth"], 
                    $_POST["formProductLength"], 
                    $_POST["formProductWeight"],
                    $savedImageName
                );
                echo json_encode($resultat);
                exit;
            }

            if($_POST["collectionType"] == "units") {
                $productHandler = new product();
                $unit = $productHandler->updateProduct(
                    $_POST["prodID"],
                    $_POST["updateUnit"]
                );
                echo json_encode($unit);
                exit;
            }

            if($_POST ["collectionType"] == "delete") {
                $productHandler = new product();
                $delete = $productHandler->deleteProduct(
                    $_POST["deleteProduct"]
                );
                echo json_encode($delete);
                exit;
            }

            if($_POST["collectionType"] == "ProdInCat") {
                $product = new product();
                $product = $product->getProductsInCategory(
                    $_POST["categoryID"]
                );
                echo json_encode($product);
                exit;
            } 

        }catch(Exception $error) {
            http_response_code(500);
            echo json_encode($error->getMessage());
        }

    } else {
        echo json_encode("Not a POST request.");
    };
?>
