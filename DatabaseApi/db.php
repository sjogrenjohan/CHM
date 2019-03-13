<?php
$db = new mysqli('localhost','root','','chmgrupp3.0');

    if($db->connect_errno)
    {
        echo $db->connect_errno. "<br>";
            die("connection failed");
    }

?>
