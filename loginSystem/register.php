<?php
// error handler show no error to user if connection or other problems happen
error_reporting(0); 
// include data base connection
include '../DatabaseApi/db.php';

// include a random user id generator
include 'UserID.php';
// get to make user info to re-write account username email 
include 'errorHandler.php';
// getting account from register for user
$userName = mysqli_real_escape_string($db,$_POST['user']); 
$userEmail = mysqli_real_escape_string($db, $_POST['email']);
$userPassword = mysqli_real_escape_string($db, $_POST['password']);
$repeteUserPassword = mysqli_real_escape_string($db,$_POST['repetPassword']);
$defultAdnimpostion = "not admin";



// make a an array of the database informtaion Username && UserID
$resultOfDataBase = $db->query("SELECT UserName, Email FROM users");
$dataOfUserName = [];

if(mysqli_num_rows($resultOfDataBase)) 
{
    while($row = mysqli_fetch_assoc($resultOfDataBase)) {
         $dataOfUserName[] = $row;
         foreach ($dataOfUserName as $key) {
          
            
                  if($userName == $key['UserName'] && $key['Email'] == $userEmail) {
                 
                     header("location: ../register.php?error=userAlreadyexist=".$userName."&mail=".$userEmail); 
                   exit(); 
                  } 
                  else if($userName == $key['UserName'])
                  {
                    header("location: ../register.php?error=userAlreadyexist=&mail=".$userEmail); 
                    exit();
                  }
                  else if($key['Email'] == $userEmail) 
                  {
                    header("location: ../register.php?error=userAlreadyexist=uid=".$userName); 
                    exit();
                  }
              
         }
    }
}

// checking for anny problems before registering a person to the database
if(empty($userName) || empty($userEmail) || empty($userPassword))
{    
     header("location: ../register.php?error=emptyfieldsuid=".$userName."&mail=".$userEmail."&password=");
     exit();
}

else if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL))
{
     header("location: ../register.php?error=uid=".$userName."&NoValidEmail=".$userEmail);
     exit();
}

else if(!preg_match("/^[a-zA-Z0-9]*$/", $userName))
{
     header("location: ../register.php?error=NoValidUsername=".$userName."&mail=".$userEmail);
     exit();
}
else if ($userPassword !== $repeteUserPassword) 
{
     header("location: ../register.php?error=PasswordRepetFaild=uid=".$userName."&mail=".$userEmail);
     exit();
} else 
{
     $hasedPassowrd = password_hash($userPassword, PASSWORD_BCRYPT);

     if($insert = $db->query("INSERT INTO users (UserID,UserName,Email,Password,Role) VALUES ('{$userID}','{$userName}','{$userEmail}','{$hasedPassowrd}', '{$defultAdnimpostion}') ")) {
          echo $db->affected_rows;
          session_start();
          $_SESSION['loggedinCostumer'] = $defultAdnimpostion;
          header("location: ../index.php?");  
          exit();
     }
}






?>