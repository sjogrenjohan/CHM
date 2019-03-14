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
    console.log("beep this!");
    var todaysDate = new Date().toJSON().slice(0,10).replace(/-/g,'/');
    
    var orderInfo = new FormData();
    orderInfo.append("collectionType", "confirmOrder")
    orderInfo.append("orderName", document.forms["confirmPayment"]["name"].value)
    orderInfo.append("orderAdress", document.forms["confirmPayment"]["adress"].value)
    orderInfo.append("orderProducts", getCartItems())
    orderInfo.append("orderDate", todaysDate)
}

function getShippingInfo() {
    var shippingInfo = new FormData();
    shippingInfo.append("collectionType", "shippingInfo")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", shippingInfo, (response) => {showCart(response)})
}

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

