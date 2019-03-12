
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
    document.getElementsByClassName(".signedUp").innerText = "Välkommen";
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
        console.log(newsletterBox)
        newsletterBox.querySelector('.name').innerText = newsletter.Name;
        newsletterBox.querySelector('.email').innerText = newsletter.Email;
        newsletterContainer.appendChild(newsletterBox); 
    })
}