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