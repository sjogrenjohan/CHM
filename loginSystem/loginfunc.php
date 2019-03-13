<?php
include '../DatabaseApi/db.php';
// getting user information
$userName = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']); 

// grab information form database 
$resultOfDataBase = $db->query("SELECT UserName,Password,Role,Email FROM users");
// make an empty array to sen information into
$UserDataBaseResult = [];
$defultAdnimpostion = "not admin";

if (empty($userName) || empty($password)) {
    header("location: ../login.php?error=Emptyfields");
    exit(); 
}
 
elseif(mysqli_num_rows($resultOfDataBase)) 
{
    while($row = mysqli_fetch_assoc($resultOfDataBase)) {
        $UserDataBaseResult[] = $row;
        foreach ($UserDataBaseResult as $user) {
           
            if($user["UserName"] == $userName && password_verify($password, $user["Password"])) {

                if($user["Role"] == $defultAdnimpostion) {
                    session_start();
                    $_SESSION['loggedinCostumer'] = $user["Role"];
                    $_SESSION["name"] = $user["UserName"];
                    $_SESSION["Email"] = $user["Email"];
                    header("location: ../index.php?");  
                    exit();
                }

                elseif ($user["Role"] !== $defultAdnimpostion) {
                    session_start();
                    $_SESSION["loggedinAdmin"] = $user["Role"];
                    $_SESSION["name"] = $user["UserName"];
                    $_SESSION["Email"] = $user["Email"];
                    header("location: ../admin.php?");  
                    exit();
                }

            }
            else if($user["UserName"] !== $userName && !password_verify($password,$user["Password"] ))
            {
                header("location: ../login.php?error=Wrong_User_Infromation");  
                exit();
            }
        }
    }
}

?>

