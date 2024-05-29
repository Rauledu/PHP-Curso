<?php

//Llamada al modelo
require_once ("modelo/personas_modelo.php");

$persona = new Personas_modelo();

$matrizPersona = $persona->getPersonas();


//Llamada a la vista

require_once ("vista/personas_views.php");


?>