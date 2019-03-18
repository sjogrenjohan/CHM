function requestOrders() {
     fetch('./DatabaseApi/orders.php', {
        method: 'POST'
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
    var orderContainer = document.getElementById("orderList");
  
    make.forEach(data => {
        var orderBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
   
        orderBox.querySelector('.OrderID').innerHTML = data.OrderID;
        orderBox.querySelector('.Name').innerHTML = data.Name;
        orderBox.querySelector('.Adress').innerHTML = data.Adress;
        orderBox.querySelector('.OrderStatus').innerHTML = data.OrderStatus;
        orderBox.querySelector('.Date-added').innerHTML = data.DateAdded;
        orderBox.querySelector('.Total-Cost').innerHTML = data.TotalCost;
        orderContainer.appendChild(orderBox); 
    })

}