<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";

    //error_reporting(0); 
    include '../DatabaseApi/db.php';

    /* $categoryID =""; */
  /*   if(isset($_REQUEST['submit'])){
        $categoryID = $_REQUEST['submit'];
        $queryU="UPDATE category_relations SET CategoryID = $categoryID WHERE ProductID= $productIDsave";
        $change_to_categorySave=mysqli_query($db,$queryU); 
    } */
    if(isset($_POST['submit'])){
        $categoryID = $_POST['submit'];
        $productIDsave = $_POST['submit'];
        $queryU="UPDATE category_relations SET CategoryID = $categoryID WHERE ProductID= $productIDsave";
        $change_to_categorySave=mysqli_query($db,$queryU); 
    }
?>

<br>
<table class = "table table-bordered table-hover">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Categories Name </th>
        </tr>
    </thead>

    <tbody>
    <?php 
    $query = "SELECT * 
    FROM products 
        INNER JOIN
    category_relations 
    ON products.ProductID = category_relations.ProductID
        INNER JOIN 
    categories 
        ON category_relations.CategoryID = categories.CategoryID
    ";   

    $select_products = mysqli_query($db, $query);
    while($row = mysqli_fetch_assoc($select_products)){


        $ProductID = $row ['ProductID'];
        $productName = $row ['productName'];
        $categoryName = $row ['categoryName'];
        $CategoryIDin = $row ['CategoryID'];

        echo"<tr>";
            echo"<td>$ProductID</td>";
            echo"<td>$productName</td>";
            echo"<td>$categoryName";
            echo '<form>';
                echo "<select name = 'categorySave'>";
                    $queryC = "SELECT * FROM categories";
                    $selct_category = mysqli_query($db, $queryC);

                    while ($rowC = mysqli_fetch_assoc($selct_category)){
                        $selected = "";
                        
                        $categoryName = $rowC ['categoryName'];
                        $categoryID = $rowC ['CategoryID'];
                        if($CategoryIDin == $categoryID ){
                            $selected =  "selected";
                        }
                        echo"<option value =".$categoryID." ".$selected.">".$categoryName."</option>";
                    }
                echo"</select>";
                echo"<button type = 'submit' name = 'productIDsave'".$ProductID."> Spara </button>";
                echo '</form>';
            echo"</td>";
        echo"</tr>";
    }
    ?>
    </tbody>
</table>

<?php
    include "../includes/html-end.php";
?>