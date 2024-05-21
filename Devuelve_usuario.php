<?php

require "Conexion_POO.php";

class DevuelveUsuarios extends Conexion{

    public function DevuelveUsuarios(){

        //llama al constructor de la clase padre.
        parent ::__construct();


    }

    //Creacion de metodo para consulta que devuelve el array.

    public function get_Usuario(){
        $consulta='select * from tarjetas';
        $resultado=$this->conexion_db->query($consulta);
        $usuarios=mysqli_fetch_all(MYSQLI_ASSOC);
         return $usuarios;
    }

}

?>