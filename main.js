
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

    makeRequest("./DatabaseApi/requestHandler.php", "POST", requestDataToPhp, (response) => { console.log(response) })
}

function addProductDB() {
    var formProductID = document.forms["addProductForm"]["prodID"].value;
    var addProduct = new FormData();
    addProduct.append('formProductID', formProductID);

    makeRequest("./DatabaseApi/requestHandler.php", "POST", addProduct, (response) => { console.log(response) })
}