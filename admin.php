<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="main.js"></script>
</head>
<body>

    <form>
        ProductID: <input type="text" name="productID">
        Pris: <input type="number" name="unitPrice">
        Namn: <input type="text" name="name">
        Volym: <input type="text" name="volume">
        Vikt: <input type="number" name="weight">
        Upload image: <!-- upload code here -->
    </form>

    <button onclick="addProductDB()">Spara produkt</button>
    <!--<button onclick="getProduct()">get</button>-->
    
</body>
</html>