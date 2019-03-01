<?php

    class Database {

        // Sets up a connection to the database
        function __construct() {
            $dsn = 'mysql:host=localhost;dbname=chmgrupp;';
            $user = 'root';
            $password = '';

            try {
                $this->connection=new PDO($dsn, $user, $password, NULL);
                //$this->connection->exec('set names utf8');
            } catch (PDOException $e) {
                throw $e;
            }
        } 
    }

?>
