<?php

    class newsLetter {

        function __construct() {
            include_once('databaseHandler.php');
            $this->database = new Database();
        }

        // register newsletters
        public function NewsletterSignUp($ID, $name, $email) {
            $sql = "INSERT INTO `newsletter_signup`(`ID`, `Name`, `Email`) VALUES ('$ID', '$name', '$email')";
            $query = $this->database->connection->prepare($sql);
            $res = $query->execute();

            if($res == false){
                return array("error"=>"Gick ej att registrera användare för nyhetsbrev.");
            }else{
                return array("Status:" => "Registrerad användare för nyhetsbrev.");
            } 
        }
    }
?>