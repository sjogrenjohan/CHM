<?php
session_start();
if(isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    $email = $_SESSION["Email"];
    echo json_encode($name . $email);
    
}
?>