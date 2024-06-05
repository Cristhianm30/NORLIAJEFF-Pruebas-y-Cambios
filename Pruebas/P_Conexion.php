<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "prueba_usuario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
