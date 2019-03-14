<?php
    include "./includes/html-start.php";
    include "./includes/header.php";
?>

<div class="jumbotron">
    <div class="container">
        <div id="productContainer" class="row">
            <template>
                <div class="col-sm-6 col-md-4 col-lg-3 no-padding">
                    <div class="card text-center">
                        <img src="" class="card-img-top" alt="">
                        <h5 class="card-title"></h5>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <p class="two card-text"></p>
                            <button class="btn btn-dark" onclick="addToCart(this)">Lägg till i Kundvagn</button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>


<script type="text/javascript" src="./JS/productLogic.js"></script>
<script type="text/javascript" src="./JS/cart.js"></script>

<script>
    var catID = "<?php echo $_GET['value']; ?>";
    getProductsInCategory(catID);
</script>

<?php
    include "./includes/footer.php";
    include "./includes/html-end.php";
?>