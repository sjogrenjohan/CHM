<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";

    error_reporting(0); 

    include '../DatabaseApi/db.php';
?>

<table class = "table table-bordered table-hover">
    <thead>
        <tr>
            <th>UserID</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        $query = "SELECT * FROM users";
        $select_users = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($select_users)){
            $userId = $row ['UserID'];
            $UserName = $row ['UserName'];
            $Email = $row ['Email'];
            $Password = $row ['Password'];
            $Role = $row ['Role'];

            echo"<tr>";
                echo"<td>$userId</td>";
                echo"<td>$UserName</td>";
                echo"<td>$Email</td>";
                echo"<td>$Password</td>";
                echo"<td>$Role</td>";

        echo"<td><a href='users-list.php?change_to_admin={$userId}'>Admin</a></td>";
        echo"<td><a href='users-list.php?change_to_sub={$userId}'>Subsecriber</a></td>";
            echo"</tr>";
        }
        
        ?>
    </tbody>
</table>

<?php

if(isset($_GET['change_to_admin'])){
    $userId=$_GET['change_to_admin'];
    $query="UPDATE users SET 'UserName'='Admin' WHERE UserID=$userId";
    $change_to_admin_query=mysqli_query($db,$query);
    header("Location: users-list.php"); 
}
if(isset($_GET['change_to_sub'])){
    $userId=$_GET['change_to_sub'];
    $query="UPDATE users SET 'UserName'='Subsecriber' WHERE UserID=$userId";
    $change_to_sub_query=mysqli_query($db,$query);
    header("Location: users-list.php");
}

?>

<?php
    include "../includes/html-end.php";
?>