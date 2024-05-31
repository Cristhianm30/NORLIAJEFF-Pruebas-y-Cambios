<?php

    require_once "Conexion.php";

    if (!empty($_POST['BtnIngresar'])) {
        if (empty($_POST['nombre']) and empty($_POST['contrasena']) and empty($_POST['correo'])) {
            echo 'LOS CAMPOS ESTAN VACIOS';
        } else {
            $nombre = $_POST['nombre'];
            $contrasena = $_POST['contrasena'];
            $correo = $_POST['correo'];
            $sql = $conexion->query("SELECT * FROM usuario WHERE nombre = '$nombre' and contrasena = '$contrasena' and correo = '$correo'");

            if ($datos = $sql->fetch_object()) {
                header("location:../HTML/Carga.html");
                
            } else {
                echo 'ACCESO DENEGADO';             
            }
        }
    }
?>