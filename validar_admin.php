<?php
if (!isset($_POST["usuario"])|| !isset($_POST['password'])) {
	exit();
}

$usua=$_POST["usuario"];
$paswd=$_POST["password"];

if ($usua=="admin" and $paswd=="admin") {

	header("Location:mantenimiento.php");
}
	else{
		echo "Algo salió mal. Por favor verifica tu usuario o contraseña";	
}
if ($usua=="zrt" and $paswd=="313") {

	header("Location:mantenimiento.php");
}
	else{
		echo "Algo salió mal. Por favor verifica tu usuario o contraseña";	
}
if ($usua=="luis" and $paswd=="313") {

	header("Location:mantenimiento.php");
}
	else{
		echo "Algo salió mal. Por favor verifica tu usuario o contraseña";	
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
    <a href="index.php" class="btn btn-primary">SALIR</a>
    </div>
</head>
<body>
    <div class="modal-dialog text-center">
    </div>
</body>
</html>