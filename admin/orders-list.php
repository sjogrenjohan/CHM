<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";

    error_reporting(0); 
    include '../DatabaseApi/db.php';
?>

<br>
<table class = "table table-bordered table-hover">
    <thead>
        <tr>
            <th>OrderID</th>
            <th>OrderD_ID</th>
            <th>Name</th>
            <th>Adress</th>
            <th>OrderStatus</th>
            <th>DateAdded</th>
            <th>TotalCost</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        $query = "SELECT * FROM orders";
        $select_orders = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($select_orders)){
            $OrderID = $row ['OrderID'];
            $OrderD_ID = $row ['OrderD_ID'];
            $Name = $row ['Name'];
            $Adress = $row ['Adress'];
            $OrderStatus = $row ['OrderStatus'];
            $DateAdded = $row ['DateAdded'];
            $TotalCost = $row ['TotalCost'];

            echo"<tr>";
                echo"<td>$OrderID</td>";
                echo"<td>$OrderD_ID</td>";
                echo"<td>$Name</td>";
                echo"<td> $Adress</td>";
                echo"<td>$OrderStatus</td>";
                echo"<td>$DateAdded</td>";
                echo"<td>$TotalCost</td>";
            echo"</tr>";
        }
        ?>
    </tbody>
</table>

<?php
    include "../includes/html-end.php";
?>