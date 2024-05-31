<?php 
    $host = "localhost:3307"; //Se le agrega el numero de puerto 3307 por condiciones en configuracion en XAMPP
    $usuario = "root"; 
    $contrasena = ""; 
    $base_de_datos = "usuariosena";
    
    $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);
    
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
?>