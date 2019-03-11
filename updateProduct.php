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
              <a class="nav-link" href="./updateProduct">Uppdatera produkt</a>
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
        <form name="updateStock">
            <div class="form-group">
                Namn: <input type="text" name="prodID" class="form-control" id="formGroupExampleInput">
                Lagersaldo: <input type="number" name="units" class="form-control" id="formGroupExapleInput">
            </div>
        </form>
    </div>
</div>
<div class="row justify-content-md-center">
    <button class="btn btn-primary" onclick="updateProductDB()">Uppdatera lagersaldo</button>&nbsp;
    <button class="btn btn-primary" onclick="getProduct()">Hämta produkt</button>
</div>



<?php
    include "./includes/html-end.php";
?>