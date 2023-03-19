
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Luis Cabrera" />
    <title>Mantenimiento de Botica</title>
    <link href="./assets/css/material-dashboard.css" rel="stylesheet" />
    <link href="./assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/js/jquery-ui/jquery-ui.min.css">
    <script src="./assets/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="blue" data-image="../assets/img/sidebar.jpg">
            <div class="logo bg-primary">
              <a class="nav-link d-flex" href="config.php">
                <i class="fas fa-cogs mr-2 fa-2x"></i>
                <p> MANTENIMIENTO</p>
              </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="listar/listar_usuario.php">
                            <i class="fas fa-user mr-2 fa-2x"></i>
                            <p> Usuarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="listar/listar_clientes.php">
                            <i class=" fas fa-users mr-2 fa-2x"></i>
                            <p> Clientes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="listar/listar_producto.php">
                            <i class="fab fa-product-hunt mr-2 fa-2x"></i>
                            <p> Productos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="listar/listar_proveedor.php">
                            <i class=" fas fa-hospital mr-2 fa-2x"></i>
                            <p>Proveedores</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="listar/listar_tiempo.php">
                            <i class=" fas fa-list mr-2 fa-2x"></i>
                            <p> Detalles Fecha</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="listar/listar_ventas.php">
                            <i class="fas fa-cart-plus mr-2 fa-2x"></i>
                            <p> Historial Ventas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex" href="./index.php">
                            <i class="fas fa-user mr-2 fa-2x"></i>
                            <p> Cerrar Sesiòn</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Sistema de Venta</a>
                        <a class="navbar-brand" href="javascript:;">Sistema de Venta</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                    <p class="d-lg-none d-md-block">
                                        Cuenta
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#nuevo_pass">Perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="salir.php">Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content bg">
                <div class="container-fluid">
