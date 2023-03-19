<?php 
include_once "../conexion_botica.php";
$sentencia = $conexion_botica->query("select Usuario_Skey,IdUsuario,Nombre_Apellidos,DNI,
    Correo,Fecha_Creacion,Usuario,Password FROM Dim_Usuario");
$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="LUIS CABRERA">
    <title>BOTICA FISI-UNAP</title>
    <script src="https://kit.fontawesome.com/e797658226.js" crossorigin="anonymous"></script>
    <!-- Cargar el CSS de Boostrap-->
    <link href="../ingcss/bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="../ingcss/style.css" rel="stylesheet">
    <link href="../micss/listar.css" rel="stylesheet">
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <h1><a href="#"><img src="../images/fisiunap1.jpg" alt=""></a></h1>
        <a class="navbar-brand" target="_blank" href="#">BOTICA-FISI</a>
        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../registrar/registrar_usuario.php">Agregar [Usuario]</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mantenimiento.php">Volver</a>
                </li>
            </ul>
        </div>
        <form action="../buscar/buscar_usuario.php" method="get">
            <input type="text" name="search" placeholder="Buscar Usuario...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
</body>
<div class="row">
    <div class="col-12">
        <h1>Lista de Usuarios</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre Apellido</th>
                        <th>DNI</th>
                        <th>Usuario</th>    
                        <th>Contraseña</th>     
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarios as $usuario){ ?>
                        <tr>
                            <td><?php echo $usuario-> Usuario_Skey ?></td>
                            <td><?php echo $usuario->Nombre_Apellidos?></td>
                            <td><?php echo $usuario->DNI?></td>
                            <td><?php echo $usuario->Usuario?></td>
                            <td><?php echo $usuario->Password?></td>
                            <td><a class="btn btn-warning" href="<?php echo "../editar/editar_usuario.php?id=". $usuario->Usuario_Skey?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?php echo "../eliminar/eliminar_usuario.php?id=". $usuario->Usuario_Skey?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>