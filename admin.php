<?php
    include "html-start.php";
?>


<div class="container">
  <div class="row">
    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#">Lägg till produkt</a>
            </li>
        </ul>
    </div>
    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link" href="#">Uppdatera produkt</a>
            </li>
        </ul>
    </div>

    <div class="col-lg-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="#">Ta bort produkt</a>
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
                <a class="nav-link" href="#">Beställningar</a>
            </li>
        </ul>
    </div>
  </div>
</div>

<div class="container">
    <form name="addProductForm">
        <div class="form-group">
            ProductID: <input type="text" name="prodID" class="form-control" id="formGroupExampleInput">
            Namn: <input type="text" name="name" class="form-control" id="formGroupExampleInput">
            Pris: <input type="text" name="unitPrice" class="form-control" id="formGroupExampleInput">
            Produktbeskrivning: <input type="text" name="productDesc" class="form-control" id="formGroupExampleInput">
            Antal produkter: <input type="text" name="unitsInStock" class="form-control" id="formGroupExampleInput">
            Höjd: <input type="text" name="height" class="form-control" id="formGroupExampleInput">
            Bredd: <input type="text" name="width" class="form-control" id="formGroupExampleInput">
            Längd: <input type="text" name="length" class="form-control" id="formGroupExampleInput">
            Vikt: <input type="text" name="weight" class="form-control" id="formGroupExampleInput">
            Lägg till bild <!-- kod för ladda upp fil -->
        </div>
    </form>

    <button class="btn btn-primary" onclick="addProductDB()">Lägg till produkt</button>
    <button class="btn btn-primary" onclick="getProduct()">Hämta produkt</button>
</div>

<?php
    include "html-end.php";
?>