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
                        <th scope="col">Namn</th>
                        <th scope="col">Antal</th>
                        <th scope="col">Pris</th>
                        <th scope="col">Ta bort vara</th>
                    </tr>
                </thead>
                <tbody id="newsletterContainer">
                    <template>
                        <tr>
                            <td class="name"></td>
                            <td class="quantity"></td>
                            <td class="price"></td>
                            <td class="remove"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
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

