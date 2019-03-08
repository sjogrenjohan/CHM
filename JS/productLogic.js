initPage();

function initPage() {
    getProduct();
}

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

function getProduct() {
    var requestDataToPhp = new FormData()
    requestDataToPhp.append("collectionType", "products")
    requestDataToPhp.append("action", "delete")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", requestDataToPhp, (response) => {showProduct(response)})
}

function showProduct(products) {
    var productContainer = document.getElementById("productContainer")
    
    products.forEach(product => {
        console.log(product.ImageURL)
        var productBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        productBox.querySelector('.card-img-top').src = "./productImages/" + product.ImageURL;
        productBox.querySelector('.card-title').innerText = product.Name;
        productBox.querySelector('.card-text').innerText = product.UnitPrice + ":-";
        productBox.querySelector('.two').innerText = product.UnitsInStock + " st i lager";
        productContainer.appendChild(productBox); 
    })
    
  }