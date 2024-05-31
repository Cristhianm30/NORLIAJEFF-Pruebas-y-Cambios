<?php
// Incluir archivo de conexión a la base de datos
require_once "../PHP/Conexion.php";

// Verificar si se ha proporcionado un ID de cliente para eliminar
if (!empty($_GET['id'])) {
    $id_cliente = $_GET['id'];

    // Construir y ejecutar la consulta SQL para eliminar el cliente
    $sql = "DELETE FROM cliente WHERE id = $id_cliente";
    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, redirigir al usuario a la misma página con el parámetro de URL 'eliminado=true'           
        header("Location: Base.php?eliminado=true");
        exit();
    } else {
        // Si hubo algún error, mostrar un mensaje de error
        echo '<div class="alert alert-danger">Error al eliminar el cliente: ' . $conexion->error . '</div>';
    }
} else {
    // Si no se proporcionó un ID de cliente, no hacer nada
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
