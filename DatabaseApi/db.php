<?php
$db = new mysqli('localhost','root','','chmgrupp');

    if($db->connect_errno)
    {
        echo $db->connect_errno. "<br>";
            die("connection failed");
    }
?>
