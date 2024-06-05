<?php
include 'P_Conexion.php';

// Supongamos que el ID del usuario es 1
$usuario_id = 1;

// Preparar la consulta SQL
$sql = "SELECT Nombre FROM Usuario WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();

// Vincular el resultado a una variable
$stmt->bind_result($nombreUsuario);

// Obtener el resultado
$stmt->fetch();

echo "El nombre del usuario es: " . $nombreUsuario;

$stmt->close();
$conn->close();
?>
