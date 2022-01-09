<?php


class Metodos {
    public function __construct()    {
        require_once "Conexion.php";
        $this->conexion = new Conexion();
    }


    function subirImagenes(){
        if(isset($_FILES['imagenverde'])){
            $dir_subida = "../CRUD-Papeleras/img/verde/";
            $fichero_subido = $dir_subida.$_FILES['imagenverde']['name'];
            if(move_uploaded_file($_FILES['imagenverde']['tmp_name'],$fichero_subido)){
                echo " El fichero se subio correctamente";
            }else{
                echo "<p>Error al subir el fichero</p>";
            }
        }
        if(isset($_FILES['imagenamarillo'])){
            $dir_subida = "../CRUD-Papeleras/img/amarillo/";
            $fichero_subido = $dir_subida.$_FILES['imagenamarillo']['name'];
            if(move_uploaded_file($_FILES['imagenamarillo']['tmp_name'],$fichero_subido)){
                echo " El fichero se subio correctamente";
            }else{
                echo "<h4>Error al subir el fichero</h4>";
            }
        }
        if(isset($_FILES['imagenazul'])){
            $dir_subida = "../CRUD-Papeleras/img/azul/";
            $fichero_subido = $dir_subida.$_FILES['imagenazul']['name'];
            if(move_uploaded_file($_FILES['imagenazul']['tmp_name'],$fichero_subido)){
                echo " El fichero se subio correctamente";
            }else{
                echo "<p>Error al subir el fichero</p>";
            }
        }

    }


}

