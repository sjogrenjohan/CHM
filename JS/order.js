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

    var orderInfo = new FormData();
    orderInfo.append("action", "confirmOrder")
    orderInfo.append("orderName", document.forms["confirmPayment"]["name"].value)
    orderInfo.append("orderAdress", document.forms["confirmPayment"]["adress"].value)

    makeRequest("./DatabaseApi/orderHandler.php", "POST", orderInfo, (response) => { console.log(response) })
}

function getShippingInfo() {
    var shippingInfo = new FormData();
    shippingInfo.append("action", "getShippingInfo")

    makeRequest("./DatabaseApi/orderHandler.php", "POST", shippingInfo, (response) => {console.log(response)})
}

/*function showShipping(details) {
    var categoryContainer = document.getElementById("categoryContainer")
        
    details.forEach(category => {
        var categoryID = category.CategoryID;
        var categoryBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        categoryBox.querySelector('.card-img-top').src = "./categoryImages/" + category.CatImage;
        categoryBox.querySelector('.card-text').innerText = category.Name;
        categoryBox.querySelector('.nav-link').href = "./productPage.php?value=" + categoryID;

        categoryContainer.appendChild(categoryBox); 
    })
}*/