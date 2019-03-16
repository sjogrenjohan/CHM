<?php

class Order {

    function __construct() {
        session_start();
        include_once('databaseHandler.php');
        $this->database = new Database();
    }
}
?>