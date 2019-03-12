
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

function singleProduct() {
    var singleData = new FormData()
    singleData.append("collectionType", "singleProduct")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", singleData, (response) => { console.log(response) })
}

function getProduct() {
    var requestDataToPhp = new FormData()
    requestDataToPhp.append("collectionType", "products")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", requestDataToPhp, (response) => { console.log(response) })
}

function addProductDB() {
    var addProduct = new FormData();
    addProduct.append("collectionType", "addProduct");
    addProduct.append('formProductID', document.forms["addProductForm"]["prodID"].value);
    addProduct.append('formProductName', document.forms["addProductForm"]["name"].value);
    addProduct.append('formUnitPrice', document.forms["addProductForm"]["unitPrice"].value);
    addProduct.append('formProductDesc', document.forms["addProductForm"]["productDesc"].value);
    addProduct.append('formUnitsInStock', document.forms["addProductForm"]["unitsInStock"].value);
    addProduct.append('formProductHeight', document.forms["addProductForm"]["height"].value);
    addProduct.append('formProductWidth', document.forms["addProductForm"]["width"].value);
    addProduct.append('formProductLength', document.forms["addProductForm"]["length"].value);
    addProduct.append('formProductWeight', document.forms["addProductForm"]["weight"].value);

    makeRequest("./DatabaseApi/requestHandler.php", "POST", addProduct, (response) => { console.log(response) })
}

function updateProductDB() {
    var updateUnits = new FormData()
    updateUnits.append("collectionType", "units")
    updateUnits.append('prodID', document.forms["updateStock"]["prodID"].value) 
    updateUnits.append('updateUnit', document.forms["updateStock"]["units"].value) 

    makeRequest("./DatabaseApi/requestHandler.php", "POST", updateUnits, (response) => { console.log(response) })
}

function deleteProductDB() {
    if(confirm('Är du helt säker på att du vill TA BORT denna produkt?')) {
        var deleteData = new FormData();
        deleteData.append("collectionType", "delete")
        deleteData.append('deleteProduct', document.forms["deleteProduct"]["prodID"].value);
    
        makeRequest("./DatabaseApi/requestHandler.php", "POST", deleteData, (response) => { console.log(response) })  
    };
}