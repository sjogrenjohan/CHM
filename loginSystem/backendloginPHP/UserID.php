<?php
  $userID = "";
  $chars = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
  $charArray = str_split($chars);
  
  for ($i=0; $i < 4 ; $i++) { 
      $randitem = array_rand($charArray);
      $userID .="". $charArray[$randitem];
  }
  
  ?>


