<?php

    include "Class/categoryClass.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if($_POST["collectionType"] == "categories") {
            $categoryHandler = new category();
            $databaseResult = $categoryHandler->getCategory();
            echo json_encode($databaseResult);
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