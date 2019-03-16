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

    makeRequest("./DatabaseApi/orderHandler.php", "POST", shippingInfo, (response) => { showShipping(response) })
}

function showShipping(details) {
    console.log("fanskap");
    var containerShip = document.getElementById("containerShip");

        details.forEach(shipInfo => {
        var detailBox = document.getElementsByTagName("template")[1].content.cloneNode(true);
        detailBox.querySelector('.form-check-label').innerText = shipInfo.FreightCompany + " " + shipInfo.DeliveryOption + " "+ shipInfo.Cost + "kr.";
        containerShip.appendChild(detailBox); 
    })
}