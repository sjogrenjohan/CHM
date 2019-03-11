
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

function getnewsLetter() {
    var customerNews = new FormData()
    customerNews.append("collectionType", "newsletter")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", customerNews , (response) => {showCategory(response)})
}

/*function showCategory(categories) {
    var categoryContainer = document.getElementById("categoryContainer")
    
    categories.forEach(category => {
        var categoryBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        categoryBox.querySelector('.card-img-top').src = "./categoryImages/" + category.CatImage;
        categoryBox.querySelector('.card-text').innerText = category.Name;
        categoryContainer.appendChild(categoryBox); 
    })
}*/