function requestOrders() {
     fetch('./admin/orders.php', {
        method: 'GET',
    }).then(function(response) {
        if (response.status >= 200 && response.status < 300) {
            return response.json()
        }
        throw new Error(response.statusText)
    })
    .then(function(response) { 
         if(response != null){
            makeLIstOfOrders(response);
        } 
    }).catch(function(err) {
        console.error(err)
    })  
}

function makeLIstOfOrders(make) {
    var newsletterContainer = document.getElementById("orderList");
  
    make.forEach(data => {
        var newsletterBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
   
        newsletterBox.querySelector('.OrderID').innerHTML = data.OrderID;
        newsletterBox.querySelector('.OrderD_ID').innerHTML = data.OrderD_ID;
        newsletterBox.querySelector('.Name').innerHTML = data.Name;
        newsletterBox.querySelector('.Adress').innerHTML = data.Adress;
        newsletterBox.querySelector('.OrderStatus').innerHTML = data.OrderStatus;
        newsletterBox.querySelector('.Date-added').innerHTML = data.DateAdded;
        newsletterBox.querySelector('.Total-Cost').innerHTML = data.TotalCost;
        newsletterContainer.appendChild(newsletterBox); 
    })

}