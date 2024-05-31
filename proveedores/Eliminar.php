<?php
// Incluir archivo de conexión a la base de datos
require_once "../PHP/Conexion.php";

// Verificar si se ha proporcionado un ID de producto para eliminar
if (!empty($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Construir y ejecutar la consulta SQL para eliminar el producto
    $sql = "DELETE FROM proveedor WHERE id = $id_producto";
    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, redirigir al usuario a la misma página con el parámetro de URL 'eliminado=true'
        header("Location: proveedor.php?eliminado=true");
        exit();
    } else {
        // Si hubo algún error, mostrar un mensaje de error
        echo '<div class="alert alert-danger">Error al eliminar el proveedor: ' . $conexion->error . '</div>';
    }
} else {
    // Si no se proporcionó un ID de producto, no hacer nada
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>