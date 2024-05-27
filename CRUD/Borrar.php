<?php

include("Conexion.php");

$Id=$_GET["Id"];

$base->query("DELETE  FROM datosusuarios where ID= '$Id'");

header("location: index.php");


?>