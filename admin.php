<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="JS/main.js"></script>
</head>
<body>

    <form name="addProductForm">
        ProductID: <input type="text" name="prodID">
        Pris: <input type="text" name="unitPrice">
        Namn: <input type="text" name="name">
        Produktbeskrivning: <input type="text" name="productDesc">
        Antal produkter: <input type="text" name="unitsInStock">
        Vikt: <input type="text" name="weight">
        Lägg till bild <!-- kod för ladda upp fil -->
    </form>

    <button onclick="addProductDB()">Spara produkt</button>
    <button onclick="getProduct()">get</button>
    
</body>
</html>