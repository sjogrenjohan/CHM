<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";

    /* error_reporting(0);  */
    include '../DatabaseApi/db.php';

    if(isset($_REQUEST['change_to_skickade'])){
        $OrderD_ID=$_REQUEST['change_to_skickade'];
        $queryU="UPDATE orders SET OrderStatus='skickade' WHERE OrderD_ID=$OrderD_ID";
        $change_to_skickade=mysqli_query($db,$queryU);
    }
    if(isset($_GET['change_to_lagd'])){
        $OrderD_ID=$_GET['change_to_lagd'];
        $queryU="UPDATE orders SET OrderStatus='lagd' WHERE OrderD_ID=$OrderD_ID";
        $change_to_lagd=mysqli_query($db,$queryU);
    }
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
                echo"<td>$OrderStatus";
                echo"<td>$DateAdded</td>";
                echo"<td>$TotalCost</td>";

                echo"<td><a href='admin/orders-list.php?change_to_skickade={$OrderD_ID}'>Skickade</a></td>";
                echo"<td><a href='admin/orders-list.php?change_to_lagd={$OrderD_ID}'>Lagd</a></td>";
            echo"</tr>";
        }
        ?>
    </tbody>
</table>

<?php
    include "../includes/html-end.php";
?>