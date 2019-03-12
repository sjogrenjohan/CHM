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
       var getLogginButton = document.getElementById("LogInLogOut");
       console.log(getLogginButton);
       
       if(getUsertype == "admin") {
           admin();
           getLogginButton.innerHTML = "Logga ut";
       }
       else {
           notadmin();
       }
   
   })();
}); 