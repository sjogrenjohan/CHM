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

 function autofill(userInfo) {
     for (let i = 0; i < userInfo.length; i++) {    
         var name = document.getElementById("recipient-name").value = userInfo[0];
         var Email = document.getElementById("recipient-Email").value = userInfo[1];
     }
 
}