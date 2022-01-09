<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplos de reciclaje</title>
        <link rel="stylesheet" href="CSS/estilo.css">
        <link rel="icon" href="https://img.icons8.com/flat-round/64/000000/recycle-sign--v1.png" type="image/png"/>
    </head>
    <body>
        <nav>
            <ul>
                <a href="../index.html">
                    <li>Inicio</li>
                </a>
                <a href="../CRUD-Papeleras/index.php">
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
            <article>
                <a href="index.html">Volver</a>
                <div>
                    <?php
                        mostrarItem();
                    ?>
                </div>
            </article>
        </main>
    </body>
</html>

<?php
    function mostrarItem(){
        echo "Id de Item: ".$_GET['id'];
    }
?>