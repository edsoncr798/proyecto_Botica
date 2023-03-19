<?php
if(!isset($_GET["id"])){
    exit();
}

$id = $_GET["id"];
include_once "../conexion_botica.php";
// echo "SELECT codigoLibro, nombreLibro, tipoLibro, empresa FROM co.libros WHERE libros = $id";
$sentencia = $conexion_botica->prepare("SELECT Cliente_Skey, Cliente_Nombre, Nombre_Empresa,Nro_Documento FROM dbo.Dim_Cliente WHERE Cliente_Skey = ? ");
$sentencia->execute([$id]);
$cliente = $sentencia->fetchObject();

if(!$cliente){
    // ! NO EXISTE
    echo("¡no exixte algun cliente con ese ID");
    exit();
}
// ?SI LIBRO EXISTE, SE EJECUTA ESTE HMTL
?>

<?php //include_once "listar_clientes.php" ?>
<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="LUIS CABRERA">
    <title>BOTICA FISI-UNAP</title>
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
        </div>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
</body>
<div class="row">
    <div class="col-12">
        <h1> Editar</h1>
            <form action="../guardar/guardaredit_cliente.php" method="POST">
       
                <input type="text" name="idclientes" id="idclientes" value=" <?php echo $cliente->Cliente_Skey;?>">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input value="<?php echo $cliente->Cliente_Nombre; ?>" required name="Cliente_Nombre" type="text" id="Cliente_Nombre"
                     placeholder="Codigo Cliente" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nombreempresa">NombreEmpresa</label>
                    <input value ="<?php echo $cliente->Nombre_Empresa; ?>" required name="Nombre_Empresa" type="text" id="Nombre_Empresa"
                     placeholder="Nombre de Empresa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="NroDocumento">NroDocumento</label>
                    <input value ="<?php echo $cliente->Nro_Documento; ?>" required name="Nro_Documento" type="text" id="Nro_Documento"
                     placeholder="Nro Documento" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="../listar/listar_clientes.php" class="btn btn-warning"> Ver Todos</a>
            </form>
    </div>
</div>

