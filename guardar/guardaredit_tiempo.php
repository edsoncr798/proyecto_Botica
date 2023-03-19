<?php
if(
    !isset($_POST['idtiempo']) ||
    !isset($_POST['anio']) ||
    !isset($_POST['mes'])
    )
{
    exit();
}

include_once "../conexion_botica.php";
$idtiempo = $_POST["idtiempo"];
$anio = $_POST["anio"];
$mes = $_POST["mes"];

$sentencia = $conexion_botica->prepare("UPDATE Dim_Tiempo SET  Tiempo_Año = ?, Tiempo_Mes = ? WHERE Tiempo_SKey = ?;");
$resultado = $sentencia->execute([$anio, $mes,  $idtiempo]);
if($resultado === true){
    header ("Location: ../listar/listar_tiempo.php");
} else{
    echo "Algo salió mal. Por favor verifique que la tabla exista, así como el ID del usuario."; 
}
?>