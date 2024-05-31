<?php
// Incluir archivo de conexión a la base de datos
require_once "../PHP/Conexion.php";

// Verificar si se ha proporcionado un ID de compra para eliminar
if (!empty($_GET['id'])) {
    $id_compra = $_GET['id'];

    // Construir y ejecutar la consulta SQL para eliminar la compra
    $sql = "DELETE FROM ventas WHERE id = $id_compra";
    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, redirigir al usuario a la misma página con el parámetro de URL 'eliminado=true'           
        header("Location: Ventas.php?eliminado=true");
        exit();
    } else {
        // Si hubo algún error, mostrar un mensaje de error
        echo '<div class="alert alert-danger">Error al eliminar la compra: ' . $conexion->error . '</div>';
    }
} else {
    // Si no se proporcionó un ID de compra, no hacer nada
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>