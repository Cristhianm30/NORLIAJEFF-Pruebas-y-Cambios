<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEMA DE INFORMACION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .table-responsive {
            background-color: aliceblue;
            max-height: 400px;
            /* Ajusta este valor según tus necesidades */
            overflow-y: auto;
            /* Habilita la barra de desplazamiento vertical */
        }

        #Codigo,
        #Producto,
        #Cantidad,
        #Monto,
        #Fecha,
        #Proveedor {
            background-color: #212529;
            color: white;
        }

        .form-label {
            color: aliceblue;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        main {
            padding-top: 40px;
            padding-bottom: 50px;
        }

        .nav-link{
                color: black;
                
            }

            .nav-link:hover{
                color: rgb(189, 112, 13);
                font-weight: bolder;
                text-decoration: underline;
            }

            footer{
                background-color: rgb(0, 0, 0);
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
                    <li class="nav-item"><a href="..\HTML\contactos.html" class="nav-link" target="_blank">Contacto</a>
                    </li>
                    <li class="nav-item"><a href="..\HTML\Preguntas.html" class="nav-link">Preguntas frecuentes</a></li>
                </ul>
            </div>


            <!-- Menú desplegable -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Sistema
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="../SISTEMA/Base.php">Clientes</a></li>
                        <li><a class="dropdown-item" href="../PRODUCTOS/producto.php">Productos</a></li>
                        <li><a class="dropdown-item" href="../proveedores/proveedor.php">Proveedores</a></li>
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
                        require_once "Registro.php";
                    ?>

                    <h2 class="text-center" id="titulo">Registro de compras </h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Codigo</label>
                        <input type="text" class="form-control" name="Codigo" id="Codigo" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Producto</label>
                        <input type="text" class="form-control" name="Producto" id="Producto" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                        <input type="tel" class="form-control" name="Cantidad" id="Cantidad" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Monto</label>
                        <input type="text" class="form-control" name="Monto" id="Monto" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Proveedor</label>
                        <input type="text" class="form-control" name="Proveedor" id="Proveedor" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="BtnRegistrar" value="OK">Registrar</button>
                </form>


                <div class="col-8 p-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Proveedor</th>
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
    <script src="https://kit.fontawesome.com/ec4fc53766.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>