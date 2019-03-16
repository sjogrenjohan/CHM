
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

    makeRequest("./DatabaseApi/requestHandler.php", "POST", requestDataToPhp, (response) => {showCategory(response)})
}

function showCategory(categories) {
    var categoryContainer = document.getElementById("categoryContainer")
        
    categories.forEach(category => {
        var categoryID = category.CategoryID;
        var categoryBox = document.getElementsByTagName("template")[0].content.cloneNode(true);
        categoryBox.querySelector('.card-img-top').src = "./categoryImages/" + category.CatImage;
        categoryBox.querySelector('.card-text').innerText = category.Name;
        categoryBox.querySelector('.nav-link').href = "./productPage.php?value=" + categoryID;

        categoryContainer.appendChild(categoryBox); 
    })
}
