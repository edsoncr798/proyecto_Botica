<?php
if(!isset($_POST["Nombre_Apellidos"]) || !isset($_POST["DNI"]) || !isset($_POST["Correo"]) || !isset($_POST["Fecha_Creacion"])|| !isset($_POST["Usuario"]) || !isset($_POST["Password"]) || !isset($_POST["IdUsuario"])){

    exit();
}

include_once "../conexion_botica.php";
$idusuario = $_POST["IdUsuario"];
$nombre = $_POST["Nombre_Apellidos"];
$dni = $_POST["DNI"];
$correo = $_POST["Correo"];
$fechc = $_POST["Fecha_Creacion"];
$usuario = $_POST["Usuario"];
$password = $_POST["Password"];

$sentencia = $conexion_botica->prepare("Insert into Dim_Usuario(Nombre_Apellidos, DNI, Correo, Fecha_Creacion, Usuario, Password,IdUsuario) VALUES (?,?,?,?,?,?,?)");

$resultado = $sentencia->execute([$nombre, $dni, $correo,$fechc,$usuario,$password,$idusuario]);

if($resultado === true){
    header("Location: ../listar/listar_usuario.php");
} else {
    echo "Algo salió mal. Por favor verifique que la tabla exista";
}
?>