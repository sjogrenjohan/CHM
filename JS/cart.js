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
    console.log("hello")
    var cartData = new FormData()
    cartData.append("collectionType", "getCartItems")
    
    makeRequest("./DatabaseApi/requestHandler.php", "POST", cartData , (response) => {showCart(response)})
}

function showCart(products) {
    console.log(products)

   /*  var productContainer = document.getElementById("productContainer")
    var productCount = 0;
    
    products.forEach(product => {
        if(productCount == numberOfProductsToRender) {
            return
        }
        console.log(product.ImageURL)
        var productBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        //productBox.querySelector('.card-img-top').src = "./productImages/" + product.ImageURL;
        productBox.querySelector('.name').innerText = product.Name;
        productBox.querySelector('.quantity').innerText = product.UnitPrice + "st.";
        productBox.querySelector('.price').innerText = product.UnitsInStock + ":-";
        productBox.querySelector('.remove').innerText = product.UnitsInStock + "Ta bort";
        productContainer.appendChild(productBox); 
        productCount++
    })
     */
}

function addToCart(button) {
    console.log("product", button.getAttribute("data-productId"))
    var cartData = new FormData()
    cartData.append("collectionType", "addToCart")
    cartData.append("productId", button.getAttribute("data-productId"))
    
    makeRequest("./DatabaseApi/requestHandler.php", "POST", cartData , (response) => {
        console.log(response)
    })
}