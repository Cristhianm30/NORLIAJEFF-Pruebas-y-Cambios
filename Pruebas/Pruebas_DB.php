<?php
include 'P_Conexion.php';

// Insertar en la tabla Usuario
$sql = "INSERT INTO Usuario (Nombre, Apellido, Email, Contrasena) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $apellido, $email, $contrasena);
//$stmt es una variable que generalmente se utiliza para almacenar un objeto de la clase mysqli_stmt.
//El método bind_param es un método de la clase mysqli_stmt que se utiliza para enlazar variables a los marcadores de parámetros en la declaración SQL.
$nombre = "Juan";
$apellido = "Perez";
$email = "juan@example.com";
$contrasena = "password";
$stmt->execute();

// Obtener el ID del usuario insertado
$usuario_id = $stmt->insert_id;
//insert_id es una propiedad de la clase mysqli_stmt que obtiene el ID generado por una consulta (generalmente INSERT) en una tabla con una columna que tiene la propiedad AUTO_INCREMENT.

// Insertar en la tabla Cliente usando el ID del usuario
$sql = "INSERT INTO Cliente (Nombre, Apellido, Correo, Direccion, Telefono, UsuarioID) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $nombre, $apellido, $correo, $direccion, $telefono, $usuario_id);

$nombre = "Cliente1";
$apellido = "Apellido1";
$correo = "cliente1@example.com";
$direccion = "Direccion 1";
$telefono = "1234567890";
$stmt->execute();

// Obtener el ID del cliente insertado
$cliente_id = $stmt->insert_id;

// Insertar en la tabla Proveedor usando el ID del usuario
$sql = "INSERT INTO Proveedor (Nombre, Direccion, Telefono, UsuarioID) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nombre, $direccion, $telefono, $usuario_id);

$nombre = "Proveedor1";
$direccion = "Direccion 2";
$telefono = "0987654321";
$stmt->execute();

// Obtener el ID del proveedor insertado
$proveedor_id = $stmt->insert_id;

// Insertar en la tabla Productos usando los IDs obtenidos
$sql = "INSERT INTO Productos (Nombre, Descripcion, Precio, Cantidad, ProveedorID, UsuarioID) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssdiii", $nombre, $descripcion, $precio, $cantidad, $proveedor_id, $usuario_id);

$nombre = "Producto1";
$descripcion = "Descripcion del producto 1";
$precio = 100.00;
$cantidad = 10;
$stmt->execute();

// Obtener el ID del producto insertado
$producto_id = $stmt->insert_id;

// Insertar en la tabla Compras usando los IDs obtenidos
$sql = "INSERT INTO Compras (Fecha, Total, Cantidad, Precio, ProductoID, UsuarioID, ProveedorID) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sddiiii", $fecha, $total, $cantidad, $precio, $producto_id, $usuario_id, $proveedor_id);

$fecha = date("Y-m-d");
$total = $precio * $cantidad;
$stmt->execute();

// Insertar en la tabla Ventas usando los IDs obtenidos
$sql = "INSERT INTO Ventas (Fecha, Total, Cantidad, Precio, ProductoID, UsuarioID, ClienteID) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sddiiii", $fecha, $total, $cantidad, $precio, $producto_id, $usuario_id, $cliente_id);

$stmt->execute();

$stmt->close();
$conn->close();
?>
