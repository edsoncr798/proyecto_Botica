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
    <link rel="stylesheet" type="text/css" href="micss/index.css">
    <script src="https://kit.fontawesome.com/e797658226.js" crossorigin="anonymous"></script>
    <div class="text-center">
    <a href="admin.php" class="btn btn-primary">INGRESAR COMO ADMINISTRADOR</a>
    </div>
</head>
<body>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="images/avatar.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" id='form' action='validar_usuario.php' method=post>

                    <fieldset>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Nombre de usuario" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="Password" class="form-control" id="Password" name="Password" placeholder="Contrasena" />
                    </div>
                    </fieldset>
                    <input class="btn btn-primary" name="connection" type="submit" value="Ingresar"/> 
                    <a href="insertar_usuario.php" class="btn btn-primary">Registrarse</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>