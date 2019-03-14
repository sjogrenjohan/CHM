
$(document).ready(function(){

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


    function admin() {    
        $('#adminButton').show();        
    }

    function notadmin() {      
        $('#adminButton').hide();      
    }

    (function() {
        var getUsertype = JSON.parse(localStorage.getItem('userType'));
        
        if(getUsertype == "admin") {
            admin();
            
        }   
        else if(getUsertype == "not admin"){
            notadmin();
            
        } else {
            notadmin();              
        }
        
    })();

}); 

function jagGerUpp() {

    fetch('./loginSystem/logOut.php', {
        method: 'post',
    })
    .then(function(X) {
        if (X.status >= 200 && X.status < 300) {
            return X.text()
        }
        throw new Error(X.statusText)
    })
    .then(function(X) {     
    })
    .catch(function(err) {
        console.error(err)
    })

}   





