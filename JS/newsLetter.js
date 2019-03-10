
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

function signUpNews() {
    var newsLetterData = new FormData()
    newsLetterData.append("newsLetter", "contact")
    newsLetterData.append("registerName", document.forms["signUpNewsLetter"]["signUpName"].value);
    newsLetterData.append("registerEmail", document.forms["signUpNewsLetter"]["signUpEmail"].value);

    makeRequest("./DatabaseApi/requestHandler.php", "POST", newsLetterData, (response) => { console.log(response) })

}