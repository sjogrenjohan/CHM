<?php
include '../DatabaseApi/db.php';

// getting user information
$userName = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']); 

// grab information form database 
$resultOfDataBase = $db->query("SELECT UserName,Password,Role FROM users");
// make an empty array to sen information into
$UserDataBaseResult = [];
$defultAdnimpostion = "not admin";

if(mysqli_num_rows($resultOfDataBase)) 
{
    while($row = mysqli_fetch_assoc($resultOfDataBase)) {
        $UserDataBaseResult[] = $row;
        foreach ($UserDataBaseResult as $user) {
           
            if($user["UserName"] == $userName && password_verify($password, $user["Password"])) {

                if($user["Role"] == $defultAdnimpostion) {
                    exit();
                }

            }
            else if($user["UserName"] !== $userName && !password_verify($password,$user["Password"] ))
            {
                die("this is wrong");
            }
        }
    }
}




?>