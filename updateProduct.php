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

    <form name="updateStock">
        ProductID: <input type="text" name="prodID">
        Lagersaldo: <input type="number" name="units">
    </form>

    <button onclick="updateProductDB()">Uppdatera lagersaldo</button>
    <button onclick="getProduct()">get</button>
    
</body>
</html>