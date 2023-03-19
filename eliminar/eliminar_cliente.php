<?php
echo $_GET["id"];
if(!isset($_GET["id"])){
  exit();
}

$id = $_GET["id"];
include_once "../conexion_botica.php";

$sentencia = $conexion_botica->prepare(" DELETE FROM Dim_Cliente WHERE Cliente_Skey = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === true){
    header ("Location: ../listar/listar_clientes.php");
} else{
    echo "Algo salió mal."; 
}
?>