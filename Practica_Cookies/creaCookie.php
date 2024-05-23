<?php

setcookie("idioma_seleccionado", $_GET["idioma"],time()+86400);

 header("Location:ver_cookie.php"); //para redirigir a pagina

?>