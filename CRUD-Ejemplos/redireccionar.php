<?php
	/**
     * @author Luis C Marzal
     * Archivo redireccionar - tras hacer una acción viene a este archivo y según qué acción, ejecuta una función de operacionesbd específica
	 * 
     */

	include('operacionesbd.php');
	$operacionesbd = new OperacionesBD();

    
    switch($_GET['direccion']) {
		case "anadirEjemplo":	// Añadir nuevo Ejemplo
			$operacionesbd->anadirEjemplo($_POST['imgObjeto'],$_POST['descripcion'],$_POST['imgPapelera']);
			break;
		case "modificarEjemplo":	// Modificar un Ejemplo específico
			$operacionesbd->modificarEjemplo($_GET['id'],$_POST['imgObjeto'],$_POST['descripcion'],$_POST['imgPapelera']);	
			break;
		case "borrarEjemplo":	// Borrar un Ejemplo
			$operacionesbd->borrarEjemplo($_GET['id']);
			break;
	}

?>