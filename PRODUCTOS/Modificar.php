<?php
// Incluir archivo de conexión a la base de datos
require_once "../PHP/Conexion.php";

// Verificar si se ha enviado el formulario de modificación
if (!empty($_POST['BtnRegistrar'])) {
    // Verificar que todos los campos necesarios estén llenos
    if (!empty($_POST['id']) && !empty($_POST['codigo']) && !empty($_POST['producto']) && !empty($_POST['precio']) && !empty($_POST['proveedor']) && !empty($_POST['stock'])) {

        // Obtener los datos del formulario
        $id = $_POST['id'];
        $codigo = $_POST['codigo'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $proveedor = $_POST['proveedor']; 
        $stock = $_POST['stock'];

        // Realizar la actualización en la base de datos
        $sql = $conexion->prepare("UPDATE productos SET codigo = ?,  producto = ?, precio = ?, proveedor = ?, stock = ? WHERE id = ?");
        $sql->bind_param("ssssii", $codigo, $producto, $precio, $proveedor, $stock, $id);

        $sql->execute();

        // Verificar si la actualización fue exitosa
        if ($sql->affected_rows > 0) {
            echo '<div class="alert alert-success" id="mensajeExito">PRODUCTO ACTUALIZADO EXITOSAMENTE</div>';
            header("Location: producto.php");
        } else {
            echo '<div class="alert alert-danger" id="mensajeError">ERROR AL ACTUALIZAR EL PRODUCTO</div>';
        }
    } else {
        echo '<div class="alert alert-danger">CAMPOS VACÍOS</div>';
    }
}

// Verificar si se ha proporcionado el ID del producto a modificar
if (!empty($_GET['id'])) {
    $id_producto = $_GET['id'];
    $sql_producto = "SELECT * FROM productos WHERE id = $id_producto";
    $result_producto = $conexion->query($sql_producto);
    if ($result_producto->num_rows > 0) {
        // Obtener los datos del producto
        $row_producto = $result_producto->fetch_assoc();
    } else {
        echo '<div class="alert alert-danger">No se encontró el producto especificado</div>';
    }
}

$conexion->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR PRODUCTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a57984765.js" crossorigin="anonymous"></script>
    <style>
       
       .nav-link{
                color: black;
                
            }

            .nav-link:hover{
                color: rgb(189, 112, 13);
                font-weight: bolder;
                text-decoration: underline;
            }

            #titulo{
                text-shadow: 2px 2px 4px rgba(70, 70, 70, 0.938);
            }


            #nombre1, #precio, #proveedor, #stock{ 
                background-color: #212529;
                color: white;
            }

            /* Añade estilos personalizados aquí si es necesario */
            .table-responsive {
                background-color: aliceblue;
                max-height: 400px; /* Ajusta este valor según tus necesidades */
                overflow-y: auto; /* Habilita la barra de desplazamiento vertical */
            }

            .form-label{
                color: aliceblue;
                font-weight: bold;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            }

            main{
                padding-top: 40px;
                padding-bottom: 50px;
            }

            footer{
                background-color: rgb(0, 0, 0);
            }

            .text-warning:hover{
                font-weight: bold;
            }
    </style>
</head>
<body style="background-color: rgb(241, 155, 41);">
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Título h1 -->
            <h1 class="navbar-brand text-black font-weight-bold">NORLIAJEFF</h1>

            <!-- Botón de la barra de navegación para dispositivos pequeños -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mi-menu"> 
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenedor para los enlaces de la barra de navegación y el menú desplegable -->
            <div class="collapse navbar-collapse justify-content-center" id="mi-menu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="..\HTML\Index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="..\HTML\Contacto.html" class="nav-link" target="_blank">Contacto</a></li>
                    <li class="nav-item"><a href="..\HTML\Preguntas.html" class="nav-link">Preguntas frecuentes</a></li>
                </ul>
            </div>
                <!-- Menú desplegable -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sistema
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="Base.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="#">Productos</a></li>
                            <li><a class="dropdown-item" href="#">Proveedores</a></li>
                            <li><a class="dropdown-item" href="#">Compras</a></li>
                            <li><a class="dropdown-item" href="#">Ventas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <form class="col-4 p-4 m-auto" method="POST">
            <h2 class="text-center" id="titulo">Modificar Producto</h2>
            <!-- Campo oculto para enviar el ID del producto -->
            <input type="hidden" name="id" value="<?php echo $row_producto['id']; ?>">
            <!-- Campo para el nombre del producto -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Codigo del producto</label>
                <input type="text" class="form-control" name="codigo" id="nombre1" required autofocus value="<?php echo $row_producto['codigo']; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" name="producto" id="nombre1" required autofocus value="<?php echo $row_producto['producto']; ?>">
            </div>
            <!-- Campo para el precio del producto -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" required value="<?php echo $row_producto['precio']; ?>">
            </div>
            <!-- Campo para el proveedor del producto -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                <input type="text" class="form-control" name="proveedor" id="proveedor" required value="<?php echo $row_producto['proveedor']; ?>">
            </div>
            <!-- Campo para el stock del producto -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" required value="<?php echo $row_producto['stock']; ?>">
            </div>
            <!-- Botón de submit para enviar el formulario -->
            <button type="submit" class="btn btn-primary" name="BtnRegistrar" value="OK">Modificar</button>
        </form>
    </main>
    <!-- Pie de página -->
    <!-- Scripts y otros recursos aquí -->
    <footer class="footer mt-auto py-5 text-white">
    <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>CONTRATACIÓN</h2>
                    <p>Contratación y demás información por favor comunicarse con nuestras operadoras</p>
                </div>
                <div class="col-md-4">
                    <h2>SERVICIOS</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-warning">Servicios</a></li>
                        <li><a href="#" class="text-warning">Contratación</a></li>
                        <li><a href="#" class="text-warning">Planes</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>CONTACTANOS</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Cucuta - Norte De Santander</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> +57 3505430000</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> NORLIAJEFF@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <p>&copy; Derechos Reservados/Liang Reyes.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../JAVASCRIPT/Script.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>