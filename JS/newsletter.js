
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