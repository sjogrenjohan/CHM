var listOfPRoduct;

function = GetLIstFormDataBAse() {
    fetch('./orders.php', {
        method: 'GET',
    }).then(function(response) {
        if (response.status >= 200 && response.status < 300) {
            return response.json()
        }
        throw new Error(response.statusText)
    })
    .then(function(response) {  
        console.log(response)
      let listOfPRoduct = response;
    }).catch(function(err) {
        console.error(err)
    }) 
}


