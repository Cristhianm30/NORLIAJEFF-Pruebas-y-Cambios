<?php 
    // Incluir el archivo de conexión
    require_once "Conexion.php";

    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Insertar los datos en la tabla (por ejemplo, "usuarios")
    $sql = "INSERT INTO usuario(nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        // Redirigir a la página de carga si la inserción fue exitosa
        header("location:../HTML/Carga.html");
    } else {
        echo "Error al registrar: " . $conexion->error;
    }
    
    // Cerrar la conexión
    $conexion->close();
?>
