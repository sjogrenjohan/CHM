<?php

class Count {

    private $session;
    private $data;
    private $value;
   

    public function makeAmount($session) {
        $data = $session;
        $result = 0;

        foreach ($data as $key => $value) {
           $result += $value;
        }
        return $result;
        
    }
    
   
}




?>