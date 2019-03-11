<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHM - Computer Hardware Market - When Quality Matters</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <style>
.class {
width: 20% !important;
margin-top: 10%;
position: relative;
left: 40%;
}

input {
    margin-bottom: 5%;
}
/* desktop background */
@media only screen 
and (min-device-width : 1080px) 
and (max-device-width : 1920px){
       body{
           background-image: url(./images/login.jpg);
           background-size: cover;
       }
    }

/* iphone se 5 */
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 568px) 
 {
    
    .class {
    width: 60% !important;
    margin-top: 10%;
    position: relative;
    left: 20%;
    
}
input {
    margin-bottom: 7%;
}
}

/* iphone x */
@media only screen 
and (min-device-width : 375px) 
and (max-device-width : 812px)
and (-webkit-device-pixel-ratio : 3) { 
    
.class {
    width: 60% !important;
    margin-top: 10%;
    position: relative;
    left: 20%;
    
}
input {
    margin-bottom: 7%;
}
}

/* iphone pluses */
@media only screen 
and (min-device-width : 414px) 
and (max-device-width : 736px) { 
    .class {
    width: 60% !important;
    margin-top: 40%;
    position: relative;
    left: 20%;
    
}
input {
    margin-bottom: 7%;
}
}

/* ipad */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (-webkit-min-device-pixel-ratio: 1){ 
    
    .class {
    width: 80% !important;
    margin-top: 10% !important;
    position: relative;
    left: 10%;
    
}
input {
    margin-bottom: 7%;
}
}
   </style>

</head>
<body class="text-center">
    <form class="form-signin class"  action="loginSystem/loginfunc.php" method="POST" >
  
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
  <div class="checkbox mb-3">

  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted"><a href="register.php">Create account here</a></p>
</form>


</body>
</html>