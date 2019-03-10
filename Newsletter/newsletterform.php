<?php
    include "./includes/html-start.php";
?>

<form name="signUpNewsLetter">
    Namn: <input type="text" name="signUpName">
    Email: <input type="text" name="signUpEmail">

    <button onclick="signUpNews()">Registrera dig till vårat nyhetsbrev!</button>

<?php
    include "./includes/html-end.php";
?>