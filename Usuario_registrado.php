<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    session_start();

    session_destroy();

    if(!isset($_SESSION["usuario"])){

        header("Location: Login.php");

    }


?>

    <h1>Bienvenido!!</h1>

<?php

    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
?>

 
</body>
</html>