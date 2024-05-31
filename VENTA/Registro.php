<?php

require_once "../PHP/Conexion.php";

if (!empty($_POST['BtnRegistrar'])) {
    if (!empty($_POST['Codigo']) and !empty($_POST['Producto']) and !empty($_POST['Cantidad']) and !empty($_POST['Monto']) and !empty($_POST['Fecha']) and !empty($_POST['Proveedor'])) {

        $codigo = $_POST['Codigo'];
        $producto = $_POST['Producto'];
        $cantidad = $_POST['Cantidad'];
        $monto = $_POST['Monto'];
        $fecha = $_POST['Fecha'];
        $proveedor = $_POST['Proveedor'];
        
        // Utilizamos una consulta preparada para evitar la inyección SQL
        $sql = $conexion->prepare("INSERT INTO compras (codigo, producto, cantidad, monto, fecha, proveedor) VALUES (?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ississ", $codigo, $producto, $cantidad, $monto, $fecha, $proveedor);
        $sql->execute();

        if ($sql->affected_rows > 0) { // Verificamos si la inserción fue exitosa
            echo '<div class="alert alert-success" id="mensajeExito">REGISTRO EXITOSO</div>';
        } else {
            echo '<div class="alert alert-danger" id="mensajeError">ERROR AL REGISTRAR</div>';
        }
        
    } else {
        echo '<div class="alert alert-danger">ALGUNO DE LOS CAMPOS ESTÁ VACÍO</div>';
    }
}

?>