<?php
include 'register.php';

if($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $userName . $userEmail;
} 
?>