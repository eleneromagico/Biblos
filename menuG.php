<?php
session_start();
if(!isset ($_SESSION['usuario'])) die("Debe logearse primero");
?>        
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        MENU
        <?php
        
        if (!$_SESSION['usuario'] || !isset($_SESSION['usuario'])) {
            echo "logeate primero";
        } else {
            $usuario = $_SESSION['usuario'];
            echo "Usuario:" . $usuario['nombre_usuario'];
            
            
            
        }
        ?>
        <h1>Opciones</h1>   
        <ul>
            <li><a href='salida.php'>Salir</a>
        </ul>
    </body>
</html>
