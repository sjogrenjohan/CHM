<?php

class Database {
    
    // Sets up a connection to the database
    function __construct() {

        
        //kopplas till extern databasserver
        /*$dsn = "mysql:host=my77b.sqlserver.se;dbname=235426-chmgrupp7;port=3306;charset=utf8mb4";
        $user = '235426_pm13163';
        $password = 'Munkjacka56';*/
        

        //kopplas till localserver
        $dsn = "mysql:host=localhost;dbname=chmgrupp7.0;port=3306;charset=utf8mb4";
        $user = 'root';
        $password = '';

        try {
            $this->connection = new PDO($dsn, $user, $password, NULL);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            throw $e;
        }
    } 
}

?>