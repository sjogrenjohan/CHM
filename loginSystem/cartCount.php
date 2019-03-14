<?php
session_start();

if(isset($_SESSION["cart"])) {
   $value = $_SESSION["cart"];
    $final = 0;

foreach ($value as $key => $value2) {
    $final += $value2;
}
echo json_encode($final);

}




?>

