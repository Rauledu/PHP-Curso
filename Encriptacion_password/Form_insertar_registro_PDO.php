<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

body{
    background-color:#FC9;
}

#boton{

    padding-top: 25px;
}
    </style>

</head>
<body>
    <h1>Ingresar datos del usuario</h1>
    <form action="PDO_insertar_registro.php" method="get">
    <table>
    <tr><td>
        <tr><td><label> Introduce el ID:</label></td><td><input type= "text" name="ID" id="ID"></td></tr>
        <tr><td><label> Introduce el nombre:</label></td><td> <input type= "text" name="nombre" id="nombre"></td></tr>
        <tr><td><label> Introduce la Edad:</label></td><td> <input type= "text" name="edad" id="edad"></td></tr>
        <tr><td><label> Introduce La direccion:</label></td><td> <input type= "text" name="direc" id="direc"></td></tr>
        <tr><td><label> Introduce el password:</label></td><td> <input type= "text" name="psw" id="psw"></td></tr>
        <tr><td colspan = "2" align="center" id="boton"><input type="submit" name="enviando" value="Agregar!"></td></tr>

</table>    
    </form>
</body>
</html>