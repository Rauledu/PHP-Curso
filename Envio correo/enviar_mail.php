<?php

if ($_POST["nombre"]=="" ||$_POST["apellido"]=="" || $_POST["email"]=="" || $_POST["comentarios"]=="") {
    

    echo"Ha habido un error. revisa los campos";
    
    die();

}

$texto_mail=$_POST["comentarios"];

$destinatario=$_POST["email"];

$asunto=$_POST["asunto"];

$header="MIME-Version: 1.0\r\n";

$header.= "Content-type: text/html; charset=ison-8859-1\r\n";
$header.= "From: Prueba PHP< rauledu31@outlook.com>\r\n";

$exito=mail($destinatario, $asunto,$texto_mail,$header);

if ($exito) {

    echo "Mensaje enviado";
}else{

    echo "Ha sucedido un error";
}



?>