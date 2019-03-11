<?php
session_start();

if($_SESSION['loggedinCostumer']) {
    echo $_SESSION['loggedinCostumer'];
    exit();
}
elseif ($_SESSION["loggedinAdmin"]) {
    echo $_SESSION["loggedinAdmin"];
}   exit();

?> 