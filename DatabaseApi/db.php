<?php

$connection = mysqli_connect('localhost', 'root', '', 'chmgrupp7_0');

    if($connection){
        echo"You are connected";
    }
    else{
        die("Database connection is faild");
        }

/* $db = new mysqli('my77b.sqlserver.se','235426_pm13163','Munkjacka56','235426-chmgrupp7');

    if($db->connect_errno)
    {
        echo $db->connect_errno. "<br>";
        die("connection failed");
    } */

?>
