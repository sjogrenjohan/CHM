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
        Namn: <input type="text" name="name">
        Pris: <input type="text" name="unitPrice">
        Produktbeskrivning: <input type="text" name="productDesc">
        Antal produkter: <input type="text" name="unitsInStock">
        Höjd: <input type="text" name="height">
        Bredd: <input type="text" name="width">
        Längd: <input type="text" name="length">
        Vikt: <input type="text" name="weight">
        Lägg till bild <!-- kod för ladda upp fil -->
    </form>

    <button onclick="addProductDB()">Spara produkt</button>
    <button onclick="getProduct()">get</button>
    
</body>
</html>