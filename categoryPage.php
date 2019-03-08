<?php
    include "./includes/html-start.php";
    include "./includes/header.php";
?>
<script type="text/javascript" src="./JS/categoryLogic.js"></script>
<div class="jumbotron">
    <div class="container">
        <div id="productContainer" class="row">
            <button onclick="showContent()">Try me</button>
            <template id="categoryTemplate">
                <div class="col-sm-6 col-md-4 col-lg-3 no-padding">
                    <div class="card">
                        <a class="nav-link" href=""></a><img src="" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                    </div>
                </div>
            </template>
            
        </div>
    </div>
</div>

<?php
    include "./includes/footer.php";
    include "./includes/html-end.php";