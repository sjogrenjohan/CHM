<?php
include "./includes/html-start.php";
include "./includes/header.php";
?>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-5">Produkter i kundvagnen</h1>
        <p class="text-right"><button type="button" class="btn btn-outline-danger" onclick="emptyCart()">Töm kundvagnen</button></p>
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Namn</th>
                        <th scope="col">Antal</th>
                        <th scope="col">Pris</th>
                        <th scope="col">Ta bort vara</th>
                    </tr>
                </thead>
                <tbody id="cartContainer">
                    <template>
                        <tr>
                            <td class="image"></td>
                            <td class="name"></td>
                            <td class="quantity"></td>
                            <td class="price"></td>
                            <td class="remove"><img onClick="removeItem()" src="./Images/trashcan2.png" style="width: 1.5em; height: 1.5em;"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-6 col-md-4">
            </div>
            <div class="col-6 col-md-4" style="display: flex; justify-content: center;">            
                <button type="button" class="btn btn-outline-danger" onclick="confirmBuy()">Slutför köp</button>
            </div>
            <div class="col-6 col-md-4" style="display: flex; justify-content: flex-end;">
                <p>Totalt pris</p>
            </div>
        </div>
    </div>
</div>
<script src="./JS/cart.js"></script>
<script>
    getCartItems()
</script>
<?php
include "./includes/footer.php";
include "./includes/html-end.php";
?>

