
function makeRequest(url, method, formdata, callback) {
    fetch(url, {
        method: method,
        body: formdata
    }).then((data) => {
        return data.json()
    }).then((result) => {
        callback(result)
    }).catch((err)=>{
        console.log(err)
    })
}

function signUp() {
    var newsletter = new FormData()
    newsletter.append("collectionType", "signUp")
    newsletter.append("signUpName", document.forms["signUpReg"]["name"].value)
    newsletter.append("signUpEmail", document.forms["signUpReg"]["email"].value)

    makeRequest("./DatabaseApi/requestHandler.php", "POST", newsletter, (response) => { console.log(response) })
}

function getNewsletter() {
    var customerNews = new FormData()
    customerNews.append("collectionType", "newsletter")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", customerNews , (response) => {showNewsletter(response)})
}

function showNewsletter(newsletter) {
    var newsletterContainer = document.getElementById("newsletterContainer")
    
    newsletter.forEach(newsletter => {
        var newsletterBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        newsletterBox.querySelector('.list-group-item').innerText = newsletter.Name + ' ' + newsletter.Email;
        newsletterContainer.appendChild(newsletterBox); 
    })
}