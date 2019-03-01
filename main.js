
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

function getAllStudents() {
    var requestDataToPhp = new FormData()
    requestDataToPhp.append("collectionType", "students")
    requestDataToPhp.append("action", "delete")

    makeRequest("requestHandler.php", "POST", requestDataToPhp, (response) => { console.log(response) })
}