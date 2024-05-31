<?php
require_once "../PHP/Conexion.php";

if (!empty($_POST['BtnRegistrar'])) {
    if (!empty($_POST['codigo']) and !empty($_POST['producto']) and !empty($_POST['precio']) and !empty($_POST['proveedor']) and !empty($_POST['stock'])) {

        $codigo = $_POST['codigo'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $proveedor =  $_POST['proveedor']; 
        $stock = $_POST['stock'];
        
        // Utilizamos una consulta preparada para evitar la inyección SQL
        $sql = $conexion->prepare("INSERT INTO productos (codigo, producto, precio, proveedor, stock) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("sssss", $codigo, $producto, $precio, $proveedor, $stock); // Corrijo "issds" a "issdi" para reflejar los tipos de datos correctos

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
