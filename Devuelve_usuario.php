<?php

require "Conexion_POO.php";

class DevuelveUsuarios extends Conexion{

    public function DevuelveUsuario(){

        //llama al constructor de la clase padre.
        parent ::__construct();


    }

    //Creacion de metodo para consulta que devuelve el array.


    public function get_Usuario(){
        //$consulta='select * from credenciales_usuario';
        $resultado=$this->conexion_db->query('select * from credenciales_usuario');
        $usuarios=fetch_all(MYSQLI_ASSOC);
         return $usuarios;
    }

    /*public function get_Usuario($dato){
        $consulta='select * from credenciales_usuario where cedula= "'. $dato . '""';
        $resultado=$this->conexion_db->query($consulta);
        $usuarios=fetch_all(MYSQLI_ASSOC);
         return $usuarios;
    }*/

}

?>