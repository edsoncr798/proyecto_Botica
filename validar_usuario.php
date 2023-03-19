<?php 
    
if (!isset($_POST['Usuario']) || !isset($_POST['Password'])) {
	exit();
}

include_once 'conexion_botica.php';
$usua = $_POST['Usuario'];
$pass = $_POST['Password'];

$sentencia = $conexion_botica->prepare("SELECT Nombre_Apellidos, DNI, Correo, Fecha_Creacion, 
	IdUsuario FROM Dim_Usuario WHERE Usuario = ? and Password = ?");
$sentencia->execute([$usua, $pass]);

$resultado = $sentencia->fetchObject();
if (!$resultado) {
	echo "";
    
}
else{
	header("Location:venta_empleado/encabezado_index.php");
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
<title>BOTICA FISI-UNAP</title>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
    <link rel="stylesheet" href="micss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="micss/encabezado.css">
    <div class="text-center">
    <a href="index.php" class="btn btn-primary">"Algo salió mal. Por favor verifica tu usuario o contraseña"</a>
    </div>
    <div class="text-center">
    <a href="./index.php" class="btn btn-primary">SALIR</a>
    </div>
</head>
<body>
    <div class="modal-dialog text-center">
    </div>
</body>
</html>