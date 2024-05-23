<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</head>
<body>
<?php

$autenticado=false;

if(isset($_POST["enviar"])){

      try{

              $base= new PDO("mysql: host=localhost; dbname=usuario", "root", "");
              $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql="SELECT * FROM USUARIO_PASS WHERE USUARIO = :login and password= :password";
              $resultado=$base->prepare($sql);

              $login=htmlentities(addslashes($_POST["login"]));
              $password=htmlentities(addslashes($_POST["password"]));

              $resultado->bindValue(":login", $login);

              $resultado->bindValue(":password", $password);

              $resultado->execute();

              $numero_registro=$resultado->rowCount();

              if ($numero_registro !=0) {

                  $autenticado=true;

                  if (isset($_POST["recordar"])) {
                    # code...

                    setcookie("nombre_usuario", $_POST["login"], time()+86400);
                  }
              }else{
                  
                  //header("location: Login.php");

                  echo "Error Usuario o Contraseña incorrecto.";

              }

      }catch(Exception $e){


          die("Error: ". $e->getMessage());
      }
}

?>

<?php

 if ($autenticado==false) {
  
  if (!isset($_COOKIE["nombre_usuario"])) {
    include("FORMULARIO.HTML");
  }

 } 

if (isset($_COOKIE["nombre_usuario"])) {
  
  echo  "Hola! ". $_COOKIE["nombre_usuario"] . "  Que bueno estas aqui.";


}else if($autenticado==true){

  echo   "Hola! ". $_POST["login"] . "Que bueno estas aqui.";
}

?>
<h1>Contenido de la web</h1>
<table width="800" border="0">

    <tr>
        <td><img src="./img/maxresdefault.jpg" width="300" height="166"></td>
        <td><img src="./img/avilaprintproject_20200702_135507_5.jpg" width="300" height="171"></td>
    </tr>
    <tr>
        <td><img src="./img/20200218_180601.jpg" width="300" height="166"></td>
        <td><img src="./img/20200218_180601.jpg" width="300" height="197"></td>
    </tr>
</table>

<?php
  if ($autenticado==true||isset($_COOKIE["nombre_usuario"])) {
    
    include("usuarios_reg.html");


  }



?>

</div>
    
</body>
</html>