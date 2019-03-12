<?php
    include "./includes/html-start.php";
    include "./adminHeader.php";
?>
<div class="container">
    <div class="row justify-content-center">
        <form name="updateStock">
            <div class="form-group">
                Namn: <input type="text" name="prodID" class="form-control" id="formGroupExampleInput">
                Lagersaldo: <input type="number" name="units" class="form-control" id="formGroupExapleInput">
            </div>
        </form>
    </div>
</div>
<div class="row justify-content-center">
    <button class="btn btn-primary" onclick="updateProductDB()">Uppdatera lagersaldo</button>&nbsp;
    <button class="btn btn-primary" onclick="getProduct()">Hämta produkt</button>
</div>



<?php
    include "./includes/html-end.php";
?>