<?php

if(!$_COOKIE["idioma_seleccionado"]){
    header("Location:PracticaI.html");
}else if($_COOKIE["idioma_seleccionado"]== "ve"){

    header("Location: venezuela.php");
    
}else if($_COOKIE["idioma_seleccionado"]== "en"){

    header("Location: england.php");
}

?>