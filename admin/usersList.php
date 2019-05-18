<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";
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
        $connection = mysqli_connect('localhost', 'root', '', 'chmgrupp7_0');
        $select_users = mysqli_query($connection, $query);
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
            echo"</tr>";
        }
        ?>
    </tbody>
</table>

<?php
    include "../includes/html-end.php";
?>