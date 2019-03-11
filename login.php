<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHM - Computer Hardware Market - When Quality Matters</title>
   <!--  <link rel="stylesheet" href="./CSS3/login.css"> -->
    <style>
* { margin:0; padding:0; }
html, body {;height:60%; width:60%; }

canvas {
    z-index: 1 !important;
    height: 15%;  
    width: 15%;
    transform: scale(10);  
    position:relative; 
    top: 12em;
    left:30em;
}
    body {
    padding: 0;
    margin: 0;
   
    background-size: cover;
}

#socailImage {
    width: 11em;
    height: 11em;
    z-index: 10000;
    position: relative;
    top: 7.5em;
    left: 4em;
}

div {
    background-color: rgb(255, 255, 255);
    width: 48%;
    height: 80%;
    border-width: 6px;
    border-style: solid;
    border-radius: 5px;
    border-color:rgb(255, 255, 255); 
    position: absolute;
    left: 25%;
    top:10%
}

form {
    z-index: 2 !important;
    margin:0 !important;
    background-color: rgb(255, 255, 255);
    height: 80%;
    width: 50%;
    position: relative;
    left: 50%;
    bottom: 04%;
}

 
.title {
    z-index:3 !important;
    padding: 0 !important;
    margin: 0 !important;
    font-size: 30px;
    position: relative;
    left: 13em;
    top: 1em;
    width: 10em;
    color:black;

}

.information {
    font-size: 12px;
    position: relative;
    left:4em;
    top: 6em;
}


#username {
    height: 2em;
    width: 14em;
    border-width: 3px;
    border-style: solid;
    border-radius: 5px;
    border-color: rgba(128, 128, 128, 0.537);
    position: relative;
    top: 8em;
    z-index: 2 !important;
    left: 12%;
}

#password {
    height: 2em;
    width: 14em;
    border-width: 3px;
    border-style: solid;
    border-radius: 5px;
    border-color: rgba(128, 128, 128, 0.537);
    position: relative;
    top: 9.2em;
    left: 12%;
}

.loginButton {
    margin: 0;
    padding: 0;
    background-color: rgba(95, 94, 94, 0.8);
    color: white;
    width: 12em;
    height: 2.5em;
    border-color: rgba(95, 94, 94, 0.8);
    border-width: 1px;
    border-radius: 5px;
    font-weight: bolder;
    position: relative;
    top:  14em;
    right: 10em;
    
}

.createAcount {
    z-index: 4!important;
    margin: 0;
    padding: 0;
    color: gray;
    font-size: 12px;
    position: relative;
    top: 33em;
    left: 38.5em;
}

.CHM {
    z-index: 4!important;
    margin: 0;
    padding: 0;
    position: relative;
    left: 15em;  
    top:3em;
}
.Slogan 
{
    z-index: 4!important;
    margin: 0;
    padding: 0;
    position: relative;
    left: 17.3em;  
    top: 5em; 
}
    </style>
</head>
<body>
    
    


<div class="form_div_background">

    
    <h3 class="title">Sign in or sign up </h3>

    <form action="./loginSystem/loginfunc.php" method="post">

        <p class="information">In order to purchase products form <br> CHM you have to have an account. <br>
        This is becuse we want our costumers<br>to the ablity to say what they think</p>

           <input type="text" name="username" id="username" placeholder="Username">

              <input type="password" name="password" id="password" placeholder="Password">

                 <button type="submit" class="loginButton">Login</button>
    </form>    
    
</div>

<a href="register.php" class="createAcount">Create your account here</a>
<h1 class="CHM">CHM</h1>
<h2 class="Slogan">When Quality Matters</h2>
<canvas></canvas> 


    <script src="./JS/cube.js"></script>
</body>
</html>