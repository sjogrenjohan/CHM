<?php
$db = new mysqli('localhost','root','','chmgrupp4.0');

    if($db->connect_errno)
    {
        echo $db->connect_errno. "<br>";
            die("connection failed");
    }

?>
