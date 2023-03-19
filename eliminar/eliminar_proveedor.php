<?php
echo $_GET["id"];
if(!isset($_GET["id"])){
  exit();
}

$id = $_GET["id"];
include_once "../conexion_botica.php";

$sentencia = $conexion_botica->prepare(" DELETE FROM Dim_Proveedor WHERE Proveedor_Skey = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === true){
    header ("Location: ../listar/listar_proveedor.php");
} else{
    echo "Algo salió mal."; 
}
?>