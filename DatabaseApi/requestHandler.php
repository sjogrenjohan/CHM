<?php

    include "productHandler.php";
    include "categoryHandler.php";
    include "newsLetterHandler.php";
    include "cartHandler.php";
    include "uploadImage.php";
    include "countCartHandler.php";

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
                echo json_encode($newSignUp);
                exit;
            }

            if($_POST["collectionType"] == "newsletter") {
                $newsletter = new NewsLetter();
                $getNewsletter = $newsletter->getNewsletter();
                echo json_encode($getNewsletter);
                exit;
            }

            if($_POST["collectionType"] == "ProdInCat") {
                $product = new productHandler();
                $product = $product->getProductsInCategory(
                    $_POST["categoryID"]
                );
                echo json_encode($product);
                exit;
            }    
        
            if($_POST["collectionType"] == "addToCart") {
                $cart = new CartHandler();
                $cart->addToCart($_POST["productId"]);
                
                echo json_encode(true);
                exit;
            }
            
            if($_POST["collectionType"] == "getCartItems") {
                $cart = new CartHandler();
                $cartItems = $cart->getCartItems();
                
                echo json_encode($cartItems);
                exit;
            }
            if($_POST["collectionType"] == "count") {
                $count = new Count();
                echo json_encode($count->makeAmount($_SESSION["cart"])); 
                exit;
               
            }
            
            if($_POST["collectionType"] == "deleteCartItems") {
                $cart = new CartHandler();
                $result = $cart->removeAllItemsFromCart();
                echo json_encode($result);
            }

            if($_POST["collectionType"] == "deleteSingleItemInCart") {
                $cart = new CartHandler();
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
