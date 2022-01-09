<?php
require_once "metodos.php";

$metodo = new Metodos();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Papeleras del minijuego</title>
        <link rel="stylesheet" href="../CSS/estilo.css">
        <link rel="icon" href="https://img.icons8.com/flat-round/64/000000/recycle-sign--v1.png" type="image/png"/>
    </head>
    <body>
        <nav>
            <ul>
                <a href="../index.html">
                    <li>Inicio</li>
                </a>
                <a href="index.php">
                    <li>Papeleras</li>
                </a>
                <a href="../CRUD-Objetos/index.html">
                    <li>Objetos</li>
                </a>
                <a href="../CRUD-Niveles/index.html">
                    <li>Niveles</li>
                </a>
            </ul>
        </nav>
        <main>

            <form method="post" enctype="multipart/form-data" action="guardararchivos.php">
                <label>Papelera Azul</label>
                <input name="nombre" type="text" placeholder="Nombre de la Imagen" required>
                <input type="file" name="imagenazul">
                <input type="submit" value="Subir">
            </form>
            <form method="post" enctype="multipart/form-data" action="#">
                <label>Papelera Verde</label>
                <input name="nombre" type="text" placeholder="Nombre de la Imagen" required>
                <input type="file" name="imagenverde">
                <input type="submit" value="Subir">
            </form>

            <form method="post" enctype="multipart/form-data" action="#">
                <label>Papelera Amarilla</label>
                <input name="nombre" type="text" placeholder="Nombre de la Imagen" required>
                <input type="file" name="imagenamarillo">
                <input type="submit" value="Subir">
            </form>
            <?php
            $metodo->subirImagenes();
            ?>
        </main>



    </body>
</html>