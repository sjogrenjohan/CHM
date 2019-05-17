<?php
$connection = mysqli_connect('localhost', 'root', '', 'chmgrupp7_0');

if($connection){
    echo"You are connected";
}
else{
    die("Database connection is faild");
    }

?>
