<?php
    /**
     * @author Luis C Marzal
     * Archivo ejemplos - contiene el modelo vista controlador
     */

    /**
     * Clase Controlador
     */
    class Controlador{

        public $vista;

        /**
         * Función constructor
         */
        function __construct(){
            $this->vista = new Vista();

        }

    }
    
    /**
     * Clase Vista
     */
    class Vista{
        function __construct(){
            
        }

        /**
         * Función para listar los ejemplos
         */
        function mostrarEjemplos(){
            //Archivo operacionesbd que ejecuta las consultas en mysql
            include('operacionesbd.php');

            $operaciones = new OperacionesBD();
            $resultado=$operaciones->listarEjemplos();

            while($fila = mysqli_fetch_assoc($resultado)){
                echo '
                    <div class="linea">
                        <a href="accion.php?id='.$fila['IdEjemplo'].'">
                            <ul>
                                <li><img src='.$fila['ImgObjeto'].'></li>
                                <li>'.$fila['Descripcion'].'</li>
                                <li><img src="'.$fila['ImgPapelera'].'"></li>
                            </ul>
                        </a>
                    </div>
                    ';
            };
        }


        /**
         * Función para listar un solo ejemplo
         */
        function mostrarUnEjemplo($id){
            //Archivo operacionesbd que ejecuta las consultas en mysql
            include('operacionesbd.php');

            $operaciones = new OperacionesBD();
            $resultado=$operaciones->listarUnEjemplo($id);
            $fila = mysqli_fetch_assoc($resultado);

            echo '
                <div class="linea">
                    <ul id="primeraLinea">
                        <li>Imagen Objeto</li>
                        <li>Descripcion</li>
                        <li>Imagen Papelera</li>
                    </ul>
                </div>
                <div class="linea">
                    <ul>
                        <li><img src='.$fila['ImgObjeto'].'></li>
                        <li>'.$fila['Descripcion'].'</li>
                        <li><img src="'.$fila['ImgPapelera'].'"></li>
                    </ul>
                </div>
                ';
        }

        /**
         * Función que envía un formulario con los datos ya insertados para modificar un ejemplo
         */
        function modificarEjemplo($id){
            //Archivo operacionesbd que ejecuta las consultas en mysql
            include('operacionesbd.php');

            $operaciones = new OperacionesBD();
            $resultadoEjemplo=$operaciones->listarUnEjemplo($id);
            $fila = mysqli_fetch_assoc($resultadoEjemplo);

            echo'
                <form action="redireccionar.php?direccion=modificarEjemplo&id='.$id.'" method="post">
                    <label>Imagen Objeto:</label><br />
                    <input type="text" name="imgObjeto" value="'.$fila["ImgObjeto"].'" required><br />
                    <label>Descripción:</label><br />
                    <input type="text" name="descripcion" value="'.$fila["Descripcion"].'" required><br />
                    <label>Imagen Papelera:</label><br />
                    <input type="text" name="imgPapelera" value="'.$fila["ImgPapelera"].'" required><br />
                
                    <input type="submit" name="enviar" id="solicitar" value="Modificar">
                </form>
                ';

        }
    }
    /**
     * Clase Modelo
     */
    class Modelo{
        function __construct(){
            
        }
    }

    
?>