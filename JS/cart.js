var totalPriceWholeCart;

function makeRequest(url, method, formdata, callback) {
    fetch(url, {
        method: method,
        body: formdata
    }).then((data) => {
        return data.json()
    }).then((result) => {
        callback(result)
    }).catch((err)=>{
        console.log(err)
    })
}

function confirmOrder() {
<<<<<<< HEAD
    console.log("beep this!");

    //var todaysDate = new Date().toJSON().slice(0,10).replace(/-/g,'/');
=======
  
    var todaysDate = new Date().toJSON().slice(0,10).replace(/-/g,'/');
>>>>>>> df1f69c03bcd303711ef8e90900fa0c901126b4f
    
    var orderInfo = new FormData();
    orderInfo.append("action", "confirmOrder")
    orderInfo.append("orderName", document.forms["confirmPayment"]["name"].value)
    orderInfo.append("orderAdress", document.forms["confirmPayment"]["adress"].value)

    //orderInfo.append("orderProduct", getCartItems())
    //orderInfo.append("orderDate", todaysDate)
    //orderInfo.append("totalPrice", totalPriceWholeCart)

    makeRequest("./DatabaseApi/orderHandler.php", "POST", orderInfo, (response) => { console.log(response) })
}

/*function getShippingInfo() {
    var shippingInfo = new FormData();
    shippingInfo.append("collectionType", "shippingInfo")

    makeRequest("./DatabaseApi/orderListHandler.php", "POST", shippingInfo, (response) => {showOrder(response)})
}*/

function getCartItems() {
    var cartData = new FormData()
    cartData.append("collectionType", "getCartItems")
    
    makeRequest("./DatabaseApi/requestHandler.php", "POST", cartData , (response) => {showCart(response)})
}

function showCart(products) {
    var cartContainer = document.getElementById("cartContainer");
    var totalpriceHolder = document.getElementById("totalpriceforCart");
    var totalPriceWholeCart = 0;
 
    products.forEach(product => {
        var cartBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        cartBox.querySelector('.name').innerText = product.Name;
        cartBox.querySelector('.quantity').innerText = product.nrOfItems + " st";
        cartBox.querySelector('.price').innerText =  product.UnitPrice;
        cartBox.querySelector('.totalPrice').innerText = product.UnitPrice * product.nrOfItems;
        cartContainer.appendChild(cartBox); 
        totalPriceWholeCart += product.UnitPrice * product.nrOfItems;
    })
    totalpriceHolder.innerHTML = totalPriceWholeCart;

}

function addToCart(button) {
    var cartData = new FormData()
    cartData.append("collectionType", "addToCart")
    cartData.append("productId", button.getAttribute("data-productId"))
    
    makeRequest("./DatabaseApi/requestHandler.php", "POST", cartData , (response) => {
        console.log(response)
    })
    reloadRequest();
}

function emptyCart() {
    var cartData = new FormData()
    cartData.append("collectionType", "deleteCartItems")

    location.reload(true);
    
    makeRequest("./DatabaseApi/requestHandler.php", "POST", cartData , (response) => {
        console.log(response)
    })
}

function removeItemFromCart() {
    var cartData = new FormData()
    cartData.append("collectionType", "deleteSingleItemInCart")
    
    location.reload(true);
    
    makeRequest("./DatabaseApi/requestHandler.php", "POST", cartData , (response) => {
        console.log(response)
    })
}

function reloadRequest(){
    var checkthe = new FormData();
    checkthe.append("collectionType", "count");
    makeRequest("./DatabaseApi/requestHandler.php", "POST", checkthe, (response) => { autocountCart(response) });
}


function autocountCart(amount) {
   var getCartNumberHolder = document.getElementById("amountCount").innerHTML = amount;
}

var run = function() {
    reloadRequest();
}();