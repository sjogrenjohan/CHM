

fetch('./loginSystem/autoCheck.php', {
    method: 'GET',
}).then(function(response) {
    if (response.status >= 200 && response.status < 300) {
        return response.json()
    }
    throw new Error(response.statusText)
})
.then(function(response) { 
        if(response != null) {
            autofill(response);
        }
}).catch(function(err) {
    console.error(err)
}) 



 function autofill(userinfo) {
    var name = document.getElementById("recipient-name");
    console.log(userinfo)
}