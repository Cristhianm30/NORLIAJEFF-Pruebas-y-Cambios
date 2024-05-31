<?php

require_once "../PHP/Conexion.php";

if (!empty($_POST['BtnRegistrar'])) {
    if (!empty($_POST['nombre']) and !empty($_POST['apellido']) and !empty($_POST['telefono']) and !empty($_POST['direccion']) and !empty($_POST['correo'])) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion =  $_POST['direccion']; 
        $correo = $_POST['correo'];
        
        // Utilizamos una consulta preparada para evitar la inyección SQL
        $sql = $conexion->prepare("INSERT INTO cliente (nombre, apellido, telefono, direccion, correo) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $nombre, $apellido, $telefono, $direccion, $correo);
        $sql->execute();

        if ($sql->affected_rows > 0) { // Verificamos si la inserción fue exitosa
            echo '<div class="alert alert-success" id="mensajeExito">REGISTRO EXITOSO</div>';
        } else {
            echo '<div class="alert alert-danger" id="mensajeError">ERROR AL REGISTRAR</div>';
        }
        
    } else {
        echo '<div class="alert alert-danger">CAMPOS VACIOS</div>';
    }
}

?>
