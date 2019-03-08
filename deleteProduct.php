<?php
    include "./includes/html-start.php";
?>
<div class="container">
  <div class="row">
    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="./admin.php">Lägg till produkt</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link" href="./updateProduct.php">Uppdatera produkt</a>
            </li>
        </ul>
    </div>

    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="./deleteProduct.php">Ta bort produkt</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#">Nyhetsbrev</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#">Beställningar</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Till CHM</a>
            </li>
        </ul>
    </div>
  </div>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <form name="deleteProduct">
            <div class="form-group">
                Delete product (ProductID): <input type="text" name="prodID" class="form-control" id="formGroupExapleInput">
            </div>
        </form>
    </div>
</div>
<div class="row justify-content-md-center">
    <button class="btn btn-primary" onclick="deleteProductDB()">Radera produkt</button>&nbsp;
    <button class="btn btn-primary" onclick="getProduct()">get</button>
</div>


<?php
    include "./includes/html-end.php";
?>