
fetch('./orders.php', {
    method: 'GET',
}).then(function(response) {
    if (response.status >= 200 && response.status < 300) {
        return response.text()
    }
    throw new Error(response.statusText)
})
.then(function(response) {  
    console.log(response)
}).catch(function(err) {
    console.error(err)
}) 
