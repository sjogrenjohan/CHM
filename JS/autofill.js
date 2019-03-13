
var autoban = function() {
    fetch('./loginSystem/UserID.php', {
        method: 'get',

    }).then(function(response) {
            if (response.status >= 200 && response.status < 300) {
                return response.text()
            }
            throw new Error(response.statusText)
        })
        .then(function(response) {  
            console.log(response);
        })
}();