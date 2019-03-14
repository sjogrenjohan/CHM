<?php
session_start();

if(isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
    $Email = $_SESSION["Email"];
    $newarray = array($name,$Email);
    echo json_encode($newarray); 
} else {
  echo json_encode("");
}

?>