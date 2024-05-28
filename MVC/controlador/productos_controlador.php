<?php


require_once ("modelo/Productos_modelo.php");

$producto = new Productos_modelo();

$matrizProducto = $producto->getProductos();




require_once ("vista/Productos_views.php");


?>