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
            <th>Product ID</th>
            <th>categories Name</th>
            <th> product Name</th>
        </tr>
    </thead>

    <tbody>


 <!--    select *
from
    tableA a
        inner join
    tableB b
        on a.common = b.common
        inner join 
    TableC c
        on b.common = c.common -->



        <?php 
        $query = "SELECT * 
        FROM products 
            INNER JOIN
        category_relations 
        ON products.ProductID = category_relations.CategoryID
            INNER JOIN 
        categories 
            ON category_relations.ProductID = categories.CategoryID
        ";

        $select_products = mysqli_query($db, $query);
        while($row = mysqli_fetch_assoc($select_products)){
            $ProductID = $row ['ProductID'];
            $Name = $row ['Name'];
            $productName = $row ['productName'];
            $categoryName = $row ['categoryName'];

            echo"<tr>";
                echo"<td>$ProductID</td>";
                echo"<td>$Name</td>";
                echo"<td>$categories</td>";
            echo"</tr>";
        }
        ?>
    </tbody>
</table>

<?php
    include "../includes/html-end.php";
?>