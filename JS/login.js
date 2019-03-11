 // check if user is logged in with fetch

 var checkForUSer = function() {
   fetch('./loginSystem/logincheck.php', {
        method: 'get',

    }).then(function(response) {
            if (response.status >= 200 && response.status < 300) {
                return response.text()
            }
            throw new Error(response.statusText)
        })
        .then(function(response) {

            if(response != "") {
                localStorage.setItem('userType', JSON.stringify(response));
            }
        })
}();