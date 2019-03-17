<?php
 
    include "Class/newsLetterClass.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
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
        }catch(Exception $error) {
            http_response_code(500);
            echo json_encode($error->getMessage());
        }

    } else {
        echo json_encode("Not a POST request.");
    };
?>