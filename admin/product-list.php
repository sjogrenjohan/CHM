<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";

    //error_reporting(0); 
    include '../DatabaseApi/db.php';
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



<!-- <select>  
  <option value="Select">Select</option> 
  <option value="Grafikkort">Grafikkort</option>  
  <option value="Hårddiskar">Hårddiskar</option>  
  <option value="Moderkort">Moderkort</option>  
  <option value="Processor">Processor</option>  
  <option value="RAM">RAM</option>  
</select> -->   



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

        /* $selectBox = '<select>';
        $queryC = "SELECT * FROM categories";
        $selct_category = mysqli_query($db, $queryC);
        while ($row = mysqli_fetch_assoc($selct_category)) {
            $categoryName = $row ['categoryName'];
            $categoryID = $row ['CategoryID']; */
            /* echo"<tr>";
                echo"<td>$ProductID</td>";
            echo"</tr>"; */
     /*        if(isset($_GET['Grafikkort'])){
                $categoryName =$_GET['Grafikkort'];
                $queryC="UPDATE categories SET categoryName ='Grafikkort' WHERE CategoryID=$categoryID";
                $change_to_admin_query=mysqli_query($db,$queryC);
                header("Location: product-list.php"); 
        }
     */    

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
                            //echo $categoryID;
                        }
                    echo"</select>";
                    echo"<bottun type = 'submit'> Spara </bottun>";
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