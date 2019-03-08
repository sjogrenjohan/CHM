initPage();

function initPage() {
    getCategory();
}


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

    makeRequest("./DatabaseApi/requestHandler.php", "POST", requestDataToPhp, (response) => {showCategory(response)})
}



function showCategory(categories) {
    //console.log(categories)
    var categoryContainer = document.getElementById("categoryContainer")

    categories.forEach(category => {
        
        var categoryBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        categoryBox.querySelector('.card-img-top').innerText = category.Image;
        categoryBox.querySelector('.card-text').innerText = category.Name;
        categoryContainer.appendChild(categoryBox); 
    })
}
  
