<?php
if(!isset($_POST["fecha"]) || !isset($_POST["anio"]) || !isset($_POST["semestre"])|| !isset($_POST["trimestre"]) || !isset($_POST["mes"])){

    exit();
}

include_once "../conexion_botica.php";
$fecha = $_POST["fecha"];
$anio = $_POST["anio"];
$semes = $_POST["semestre"];
$trimes = $_POST["trimestre"];
$mes = $_POST["mes"];

$sentencia = $conexion_botica->prepare("INSERT INTO Dim_Tiempo(Fecha_Actual, Tiempo_Año,
 Tiempo_Semestre, Tiempo_Trimestre, Tiempo_Mes) VALUES (?,?,?,?,?)");

$resultado = $sentencia->execute([$fecha, $anio, $semes, $trimes,$mes]);

if($resultado === true){
    header("Location: ../listar/listar_tiempo.php");
} else {
    echo "Algo salió mal. Por favor verifique que la tabla exista";
}
?>