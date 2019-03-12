<?php
    include "./includes/html-start.php";
    include "./includes/header.php";
    ?>
<div class="jumbotron">
    <div class="container">
        <div id="categoryContainer" class="row">
            <template>
                <div class="col-sm-6 col-md-4 col-lg-3 no-padding">
                    <div class="card text-center">
                        <a class="nav-link" href="./productPage.php"><img src="" class="card-img-top" alt=""></a>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </template>
            
        </div>
    </div>
</div>

<script type="text/javascript" src="./JS/categoryLogic.js"></script>
<script>
    getCategory();
</script>
<?php
    include "./includes/footer.php";
    include "./includes/html-end.php";
?>