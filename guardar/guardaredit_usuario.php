<?php
if(
    !isset($_POST['idusuarios']) ||
    !isset($_POST['Nombre_Apellidos']) ||
    !isset($_POST['DNI']) ||
    !isset($_POST['Usuario']) ||
    !isset($_POST['Password'])
    )
{
    exit();
}

include_once "../conexion_botica.php";
$idusuarios = $_POST["idusuarios"];
$nombre = $_POST["Nombre_Apellidos"];
$dni = $_POST["DNI"];
$usuario = $_POST["Usuario"];
$password = $_POST["Password"];

$sentencia = $conexion_botica->prepare("UPDATE Dim_Usuario SET  Nombre_Apellidos = ?, DNI = ?,Usuario = ?,Password = ? WHERE Usuario_Skey = ?;");
$resultado = $sentencia->execute([$nombre, $dni,$usuario,$password,$idusuarios]);
if($resultado === true){
    header ("Location: ../listar/listar_usuario.php");
} else{
    echo "Algo salió mal. Por favor verifique que la tabla exista, así como el ID del usuario."; 
}
?>