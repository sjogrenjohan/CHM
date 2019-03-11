<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="JS/newsletter.js"></script>
    <title>Document</title>
</head>
<body>
    <form name="signUpReg">
        Namn: <input type="text" name="name">
        Email: <input type="email" name="email">
    </form>

    <button onclick="signUp()">Registrera dig till nyhetsbrevet!</button>

    <div class="jumbotron">
    <div class="container">
        <div id="categoryContainer" class="row">
            <template>
                <div class="col-sm-6 col-md-4 col-lg-3 no-padding">
                    <div class="card text-center">
                        <a class="nav-link" href=""><img src="" class="card-img-top" alt=""></a>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </template>
            
        </div>
    </div>
</div>

<script type="text/javascript" src="./JS/categoryLogic.js"></script>
<script>
    getCategory();
</script>
    
</body>
</html>