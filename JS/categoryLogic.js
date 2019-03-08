getCategory();

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

function getCategory() {
    var requestDataToPhp = new FormData()
    requestDataToPhp.append("collectionType", "categories")
    requestDataToPhp.append("action", "delete")

    makeRequest("./DatabaseApi/requestHandler.php", "POST", requestDataToPhp, (response) => { console.log(response) })
}

function showContent() {
    var temp = document.getElementsByTagName("template")[0];
    var clon = temp.content.cloneNode(true);
    
    document.body.appendChild(clon);
  }