<?php
require_once "../PHP/Conexion.php";

if (!empty($_POST['BtnRegistrar'])) {
    if (!empty($_POST['id']) and !empty($_POST['nombre']) and !empty($_POST['correo']) and !empty($_POST['telefono']) ) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono =  $_POST['telefono']; 
        
        // Utilizamos una consulta preparada para evitar la inyección SQL
        $sql = $conexion->prepare("INSERT INTO proveedor (id, nombre, correo, telefono) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $id, $nombre, $correo, $telefono); // Corrijo "issds" a "issdi" para reflejar los tipos de datos correctos

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