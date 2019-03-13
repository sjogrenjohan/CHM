fetch('./orders.php', {
    method: 'GET',
}).then(function(response) {
    if (response.status >= 200 && response.status < 300) {
        return response.json()
    }
    throw new Error(response.statusText)
})
.then(function(response) { 
        makeLIstOfOrders(response);
}).catch(function(err) {
    console.error(err)
}) 




function makeLIstOfOrders(data) {
    var newsletterContainer = document.getElementById("orderList");
  
    data.forEach(data => {
        var newsletterBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
   
        newsletterBox.querySelector('.OrderID').innerText = data.CustomerID;
        newsletterBox.querySelector('.CustomerID').innerText = data.DateAdded;
        newsletterBox.querySelector('.OrderDET_ID').innerText = data.OrderDet_ID;
        newsletterBox.querySelector('.Order-status').innerText = data.OrderID;
        newsletterBox.querySelector('.Date-added').innerText = data.OrderStatus;
        newsletterBox.querySelector('.Total-Cost').innerText = data.TotalCost;
        newsletterContainer.appendChild(newsletterBox); 
})

}