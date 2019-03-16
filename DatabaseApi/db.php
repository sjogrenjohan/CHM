<?php
$db = new mysqli('localhost','root','','chmgrupp5.0');

    if($db->connect_errno)
    {
        echo $db->connect_errno. "<br>";
        die("connection failed");
    }

?>
