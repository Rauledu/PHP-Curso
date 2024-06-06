<?php

include_once("Objeto_blog.php");

    class Manejo_Objetos{

        private $conexion;

        public function __construct($conexion){

            $this->conexion = $conexion;

        }

    public function getConexion(PDO $conexion){


            $this->conexion = $conexion;

         }

        public function getContenidoPorFecha(){

            $matriz=array();

            $contador=0;

            $resultado= $this->conexion->query("select * from contenido order by fecha");

            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

                        $blog=new Objeto_blog();

                        $blog->setId($registro["ID"]);

                        $blog->setTitulo($registro["titulo"]);

                        $blog->setComentario($registro["comentario"]);

                        $blog->setimagen($registro["imagen"]);

                        $matriz[$contador]=$blog;

                        $contador++;

                }      

                return $matriz;

        }

        public function insertaContenido(Objeto_blog $blog){

            $sql="insert into contenido(titulo,fecha,comentario,imagen)
            values('". $blog->getTitulo() . "', '". $blog->getFecha() ."','" . $blog->getComentario() . "' , '" . $blog->getimagen() . "')";

            
            $this->conexion->exec($sql);

        }

    }


?>