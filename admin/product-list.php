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
            <th>ProductID</th>
            <th>Name</th>
            <th>UnitPrice</th>
            <th>ProductDescription</th>
            <th>UnitsInStock</th>
            <th>ProductHeight</th>
            <th>ProductWidth</th>
            <th>ProductLength</th>
            <th>ProductWeight</th>
            <th>ImageURL</th>
            <th>categories</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        $query = "SELECT *, categories.Name AS categorieName FROM products 
        LEFT JOIN category_relations
        ON products.ProductID = category_relations.ProductID
        LEFT JOIN products
        ON  category_relations.CategoryID = categories.CategoryID

        ";
        $select_products = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($select_products)){
            $ProductID = $row ['ProductID'];
            $Name = $row ['Name'];
            $UnitPrice = $row ['UnitPrice'];
            $ProductDescription = $row ['ProductDescription'];
            $UnitsInStock = $row ['UnitsInStock'];
            $ProductHeight = $row ['ProductHeight'];
            $ProductWidth = $row ['ProductWidth'];
            $ProductLength = $row ['ProductLength'];
            $ProductWeight = $row ['ProductWeight'];
            $ImageURL = $row ['ImageURL'];
            $categories = $row ['categories'];

            echo"<tr>";
                echo"<td>$ProductID</td>";
                echo"<td>$Name</td>";
                echo"<td>$UnitPrice</td>";
                echo"<td> $ProductDescription</td>";
                echo"<td>$UnitsInStock</td>";
                echo"<td>$ProductHeight</td>";
                echo"<td>$ProductWidth</td>";
                echo"<td>$ProductLength</td>";
                echo"<td>$ProductWeight</td>";
                echo"<td>$ImageURL</td>";
                echo"<td>$categories</td>";
            echo"</tr>";
        }
        ?>
    </tbody>
</table>

<?php
    include "../includes/html-end.php";
?>