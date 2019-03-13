var numberOfProductsToRender;

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

function getProductsInCategory(catID) {
    var ProdInCat = new FormData();
    ProdInCat.append("collectionType", "ProdInCat");
    ProdInCat.append("categoryID", catID);

    makeRequest("./DatabaseApi/requestHandler.php", "POST", ProdInCat, (response) => { showProduct(response) });
}

function getProduct(numberOfProducts) {
    numberOfProductsToRender = numberOfProducts
    var requestDataToPhp = new FormData()
    requestDataToPhp.append("collectionType", "products")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", requestDataToPhp, (response) => {showProduct(response)})
}

function showProduct(products) {
    var productContainer = document.getElementById("productContainer")
    var productCount = 0;

    products.forEach(product => {
        if(productCount == numberOfProductsToRender) {
            return
        }
    
        var productBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        productBox.querySelector('.card-img-top').src = "./productImages/" + product.ImageURL;
        productBox.querySelector('.card-title').innerText = product.Name;
        productBox.querySelector('.card-text').innerText = product.UnitPrice + ":-";
        productBox.querySelector('.two').innerText = product.UnitsInStock + " st i lager";
        productBox.querySelector("button").setAttribute("data-productId", product.ProductID);
        productContainer.appendChild(productBox); 
        productCount++
    })
}

//gör en ny show product funktion
/*function showProduct(products) {
    var productContainer = document.getElementById("productContainer")
    var productCount = 0;

    products.forEach(product => {
        if(productCount == numberOfProductsToRender) {
            return
        }
    
        var productBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        productBox.querySelector('.card-img-top').src = "./productImages/" + product.ImageURL;
        productBox.querySelector('.card-title').innerText = product.Name;
        productBox.querySelector('.card-text').innerText = product.UnitPrice + ":-";
        productBox.querySelector('.two').innerText = product.UnitsInStock + " st i lager";
        //productBox.querySelector("button").setAttribute("data-productId", product.ProductID);
        productContainer.appendChild(productBox); 
        productCount++
    })
}*/