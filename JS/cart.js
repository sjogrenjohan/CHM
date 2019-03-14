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

function getCartItems() {
    var cartData = new FormData()
    cartData.append("collectionType", "getCartItems")
    
    makeRequest("./DatabaseApi/requestHandler.php", "POST", cartData , (response) => {showCart(response)})
}

function showCart(products) {
    var cartContainer = document.getElementById("cartContainer")
    
    products.forEach(product => {
        var cartBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        cartBox.querySelector('.name').innerText = product.Name;
        cartBox.querySelector('.quantity').innerText = product.nrOfItems + " st";
        cartBox.querySelector('.price').innerText = product.UnitPrice;
        cartBox.querySelector('.totalPrice').innerText = product.UnitPrice;
        cartContainer.appendChild(cartBox); 
    })
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

function confirmBuy() {
    console.log("beep this");
}