<?php
session_start();

if( isset($_SESSION['loggedinCostumer'])) {
    $notAdmin = $_SESSION['loggedinCostumer'];
    echo $notAdmin;
    exit();
}
elseif (isset($_SESSION["loggedinAdmin"])) {
    $admin = $_SESSION["loggedinAdmin"];
    echo $admin;
    exit();
}

?>