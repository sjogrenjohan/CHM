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

    //lägger in order i databasen
    var orderInfo = new FormData();
    orderInfo.append("action", "confirmOrder")
    orderInfo.append("orderName", document.forms["confirmPayment"]["name"].value)
    orderInfo.append("orderAdress", document.forms["confirmPayment"]["adress"].value)

    makeRequest("./DatabaseApi/orderHandler.php", "POST", orderInfo, (response) => { console.log(response) })

    //uppdatera saldot på de beställda produkterna
    var stockInfo = new FormData();
    stockInfo.append("action", "updateStockInOrder");
    makeRequest("./DatabaseApi/orderHandler.php", "POST", stockInfo, (response) => { console.log(response) })

}

//Hämtar shippingInfo 
function getShippingInfo() {
    var shippingInfo = new FormData();
    shippingInfo.append("action", "getShippingInfo")

    makeRequest("./DatabaseApi/orderHandler.php", "POST", shippingInfo, (response) => { showShipping(response) })
}
//visar valda shippingInfo i template i modalen.
function showShipping(details) {
    console.log("fanskap");
    var containerShip = document.getElementById("containerShip");

        details.forEach(shipInfo => {
        var detailBox = document.getElementsByTagName("template")[1].content.cloneNode(true);
        detailBox.querySelector('.form-check-label').innerText = shipInfo.FreightCompany + " " + shipInfo.DeliveryOption + " "+ shipInfo.Cost + "kr.";
        containerShip.appendChild(detailBox); 
    })
}

 //Stäng ner orderfönstret
    //töm kundvagnen
    //omdirigera till en tack för din beställning sida