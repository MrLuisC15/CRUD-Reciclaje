<?php
$dir_subida = "../CRUD-Papeleras/img/";
$fichero_subido = $dir_subida.$_FILES['imagen']['name'];
if(move_uploaded_file($_FILES['imagen']['tmp_name'],$fichero_subido)){
    echo " El fichero se subio correctamente";
}else{
    echo "Error al subir el fichero";
}