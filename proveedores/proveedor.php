<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SISTEMA DE INFORMACION</title>
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


            #id, #nombre, #correo, #telefono{ 
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
                            <li><a class="dropdown-item" href="../SISTEMA/Base.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="../PRODUCTOS/producto.php">Productos</a></li>
                            <li><a class="dropdown-item" href="proveedor.php">Proveedores</a></li>
                            <li><a class="dropdown-item" href="../VENTA/COMPRAS.php">Compras</a></li>
                            <li><a class="dropdown-item" href="../VENTA/Ventas.php">Ventas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section>
            <div class="container-fluid row">
                <form class="col-4 p-3" method="POST">
                    <?php
                        require_once "registro.php";
                    ?>
                    <h2 class="text-center" id="titulo">Registro de Proveedor</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Codigo</label>
                        <input type="text" class="form-control" name="id" id="id" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="correo" id="correo" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" required>
                    </div>

                    
                    <button type="submit" class="btn btn-primary" name="BtnRegistrar" value="OK">Registrar</button>
                </form>

                <div class="col-8 p-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require_once "mostrar.php"; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../JAVASCRIPT/Script.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>