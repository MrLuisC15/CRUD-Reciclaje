<?php
	/**
     * @author Luis C Marzal
     * Archivo operacionesbd - contiene las consultas y las envía hacia el servidor mysql
	 * 
     */

	/**
	 * Clase Operaciones BD
	 */
	class OperacionesBD{

		private $conexion;
		private $resultado;

        /**
         * Función constructor
         */
		function __construct() {

			// Solicitamos el archivo configbd el cual contiene las constantes de la Base de datos
			require 'configbd.php';

			// Conexion al servidor mysql
			$this->conexion  = new mysqli(SERVIDOR,USUARIO,CONTRASENA,BASEDATOS);
		}


		


		/**
		 * Función para obtener un array con todos los Ejemplos
		 */
		function listarEjemplos(){

			if($this->conexion === false){
				echo "<script type='text/javascript'>alert('ERROR, ha fallado la conexión con el servidor de bases de datos');window.location.href='index.php'</script>"; // Alerta en caso de error
			}else{
				$consulta = "SELECT IdEjemplo, ImgObjeto, Descripcion, ImgPapelera FROM ejemplos;";		// Consulta a ejecutar

				return $this->resultado = mysqli_query($this->conexion, $consulta);
			}
			return;

		}

		/**
		 * Función para obtener un solo Ejemplo
		 */
		function listarUnEjemplo($id){
			if($this->conexion === false){
				echo "<script type='text/javascript'>alert('ERROR, ha fallado la conexión con el servidor de bases de datos');window.location.href='index.php'</script>"; // Alerta en caso de error
			}else{

				$consulta = "SELECT ImgObjeto, Descripcion, ImgPapelera FROM ejemplos WHERE IdEjemplo=".$id.";";	// Consulta a ejecutar
				return $this->resultado = mysqli_query($this->conexion, $consulta);
			}
		}

		/**
		 * Función para añadir un Ejemplo a la Base de datos
		 */
		function anadirEjemplo($ImgObjeto,$Descripcion,$ImgPapelera){

			if($this->conexion === false){
				echo "<script type='text/javascript'>alert('ERROR, ha fallado la conexión con el servidor de bases de datos');window.location.href='index.php'</script>"; // Alerta en caso de error
			}else{

				$consulta = "INSERT INTO ejemplos (ImgObjeto, Descripcion, ImgPapelera) VALUES
				('".$ImgObjeto."', '".$Descripcion."' ,'".$ImgPapelera."');";
	
				if($this->conexion->query($consulta)==false){
					echo "<script type='text/javascript'>alert('ERROR, no se ha añadido correctamente el Ejemplo');window.location.href='index.php'</script>"; // Alerta en caso de error
				}
				header("Location: index.php");
			}

			
		}


		/**
		 * Función para borrar un Ejemplo
		 */
		function borrarEjemplo($id){
			if($this->conexion === false){
				echo "<script type='text/javascript'>alert('ERROR, ha fallado la conexión con el servidor de bases de datos');window.location.href='index.php'</script>"; // Alerta en caso de error
			}else{

				$consulta = "DELETE FROM ejemplos WHERE IdEjemplo = '".$id."';";
				

				if($this->conexion->query($consulta)==false){
					echo "<script type='text/javascript'>alert('ERROR, no se ha borrado correctamente');window.location.href='index.php'</script>"; // Alerta en caso de error
				}
				header("Location: index.php");
			}
		}
		/**
		 * Función para modificar un Ejemplo
		 */
		function modificarEjemplo($id,$ImgObjeto,$Descripcion,$ImgPapelera){

			if($this->conexion === false){
				echo "<script type='text/javascript'>alert('ERROR, ha fallado la conexión con el servidor de bases de datos');window.location.href='index.php'</script>"; // Alerta en caso de error
			}else{

				$consulta = "UPDATE ejemplos SET ImgObjeto = '".$ImgObjeto."',Descripcion='".$Descripcion."' ,ImgPapelera='".$ImgPapelera."' WHERE IdEjemplo =".$id.";";

				echo $consulta;

				if($this->conexion->query($consulta)){
					header("Location: index.php");
					
				}else{
					echo "ERROR, no se ha modificado correctamente el Ejemplo";	// Alerta en caso de error
				}
			}
		}
		
	}
?>
