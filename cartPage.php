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
                        <th scope="col">Totalt</th>
                        <th scope="col">Radera</th>
                    </tr>
                </thead>
                <tbody id="cartContainer">
                    <template>
                        <tr>
                            <td class="name"></td>
                            <td class="quantity"></td>
                            <td class="price"></td>
                            <td class="totalPrice"></td>
                            <td class="remove"><img onClick="removeItemFromCart()"  src="./Images/trashcan2.png" style="width: 1.5em; height: 1.5em; cursor: pointer;"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
            </div>
            <div class="col-sm-2 col-md-4 col-lg-4" style="display: flex; justify-content: center;">            
                <button data-toggle="modal" data-target="#exampleModalCenter" data-whatever="@mdo" type="button" class="btn btn-outline-success" onclick="confirmBuy()">Slutför köp</button>
            </div>
            <div class="col-sm-2 col-md-4 col-lg-4" style="display: flex; justify-content: flex-end;">
                <p id="totalPriceOfAllProducts"> <span id="totalpriceforCart"></span> Totalt pris</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Slutför din betalning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <label for="recipient-name" class="col-form-label">OBS: Din faktura leveras via epost.</label>
        <form name="confirmPayment">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Namn:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Adress:</label>
                <input type="text" name="adress" class="form-control" id="recipient-name">
            </div>
            <label for="message-text" class="col-form-label">Fraktalternativ:</label>
            <div class="form-check">
                <input name="homeDelivery" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Hemleverans
                </label>
                </div>
            <div class="form-check">
                <input name="getInStore" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Hämta i butik
                </label>
                </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Vill du ha vårat nyhetsbrev? <span data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="cursor: pointer;">Klicka här</span></label>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Ångra</button>
        <button type="button" class="btn btn-dark" onclick="confirmOrder()">Bekräfta</button>
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

