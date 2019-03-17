<?php

class Database {
    
    // Sets up a connection to the database
    function __construct() {
        //$dsn = "mysql:host=localhost;dbname=chmgrupp;port=3306;charset=utf8mb4";
        $dsn = "mysql:host=localhost;dbname=chmgrupp7.0;port=3306;charset=utf8mb4";
        $user = 'root';
        $password = '';

        try {
            $this->connection = new PDO($dsn, $user, $password, NULL);
            //$this->connection->exec('set names utf8');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            throw $e;
        }
    } 
}

?>