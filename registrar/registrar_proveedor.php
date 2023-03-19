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
<div class="main">
<section id="content">
    <div class="main">
      <div class="grid_8"> 
            <form action="../validar/validar_proveedor.php" method="POST">
              <div class="form-group">
                <label for="nombre">Nombre Proveedor</label>
                <input required name="Proveedor_Nombre" type="text" id="Proveedor_Nombre" placeholder="Nombre Proveedor" class="form-control">
              </div>
              <div class="form-group">
                <label for="nombre">RUC</label>
                <input required name="RUC" type="number" id="RUC " placeholder="RUC" class="form-control">
              </div>
              <div class="form-group">
                <label for="nombre">Direccion</label>
                <input required name="Direccion" type="text" id="Direccion" placeholder="Direccion" class="form-control">
              </div>
              <div class="form-group">
                <label for="nombre">Codigo</label>
                <input required name="IdProveedor" type="number" id="IdProveedor" placeholder="Codigo" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="../listar/listar_proveedor.php" class="btn btn-warning">Ver todos</a>
            </form>
      </div>
      <div class="clear"></div>
    </div>
  </section>
  </div>
</body>
</html>   