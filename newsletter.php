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
                <a class="nav-link" href="./newsletter.php">Nyhetsbrev</a>
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
<div class="jumbotron">
    <div class="container">
        <div id="newsletterContainer">
            <template>
                <div class="col-sm-6 col-md-4 col-lg-3 no-padding">
                    <ul class="list-group">
                        <li class="list-group-item"></li>
                    </ul>
                </div>
            </template>
        </div>
    </div>
</div>
 
<script type="text/javascript" src="./JS/newsletter.js"></script>
<script>
    getNewsletter();
</script>
<?php
    include "./includes/footer.php";
    include "./includes/html-end.php";
?>