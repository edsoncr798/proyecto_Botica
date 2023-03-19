<?php //include_once "encabezado.php" ?>
<!DOCTYPE html>
<html lang="es">
<title>Botica FISI-UNAP</title>
<meta charset="utf-8">
<meta name="description" content="Reportes Botica">
<meta name="author" content="CABRERA TOCAS LUIS F.">
<link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/slider.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/jqtransform.css">
<link rel="stylesheet" type="text/css" media="screen" href="../ingcss/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="../ingcss/bootstrap.min.css">
<link rel="stylesheet" href="../micss/bootstrap.min.css">
<link rel="stylesheet" href="../micss/mantenimiento.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/vegur_400.font.js"></script>
<script src="js/Vegur_bold_700.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/tms-0.4.x.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/FF-cash.js"></script>
<head>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <h1><a href="registrar_usuario.php"><img src="../images/fisiunap1.jpg" alt=""></a></h1>
        <a class="navbar-brand " target="_blank" href="#">BOTICA FISI</a>
    </nav>
</head>

<body>

    <!-- Termina la definición del menú -->
    <main role="main" class="container">
<div class="row">
  <div class="col-12">
    <h1>Agregar</h1>
    <form action="../validar/validar_cliente.php" method="POST">
      <div class="form-group">
        <label for="nombre">Nombre Cliente</label>
        <input required name="Cliente_Nombre" type="text" id="Cliente_Nombre" placeholder="Nombre del Cliente" class="form-control">
      </div>
      <div class="form-group">
        <label for="nombre">Nombre Empresa</label>
        <input required name="Nombre_Empresa" type="text" id="Nombre_Empresa" placeholder="Nombre de Empresa" class="form-control">
      </div>
      <div class="form-group">
        <label for="nombre">Nro Documento</label>
        <input required name="Nro_Documento" type="number" id="Nro_Documento" placeholder="Numero Documento" class="form-control">
      </div>
      <div class="form-group">
        <label for="nombre">Codigo Cliente</label>
        <input required name="IdCliente" type="number" id="IdCliente" placeholder="Codigo Cliente" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Guardar</button>
      <a href="../listar/listar_clientes.php" class="btn btn-warning">Ver todos</a>
    </form>
  </div>
</div>         


