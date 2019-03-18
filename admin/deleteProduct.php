<?php
    include "../includes/admin-start.php";
    include "../includes/adminHeader.php";
?>
<div class="container">
    <div class="row justify-content-center">
        <form name="deleteProduct">
            <div class="form-group">
                Delete product (ProductID): <input type="text" name="prodID" class="form-control" id="formGroupExapleInput">
            </div>
        </form>
    </div>
</div>
<div class="row justify-content-center">
    <button class="btn btn-primary" onclick="deleteProductDB()">Radera produkt</button>&nbsp;
    <button class="btn btn-primary" onclick="getProduct()">Hämta produkt</button>
</div>


<?php
    include "../includes/html-end.php";
?>