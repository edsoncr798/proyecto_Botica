<?php session_start(); $_SESSION['username']="";?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BOTICA FISI-UNAP</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/vegur_400.font.js"></script>
<script src="js/Vegur_bold_700.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/tms-0.4.x.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(document)
    .ready(function () {
    $('.form-1')
        .jqTransform();
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 1000,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <div>
      <h1><a href="index.php"><img src="images/fisiunap.jpg" alt=""></a></h1>
      <div class="social-icons"></div>
      <div id="slide">
        <div class="slider">
          <ul class="items">
            <li><img src="images/img3.jpg" alt=""></li>
            <li><img src="images/img4.jpg" alt=""></li>
            <li><img src="images/img1.jpg" alt=""></li>
            <li><img src="images/img2.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
      <nav>
      		<ul class="menu slide">
			<li class="current"><a href="index.php">Principal</a></li>
			<li><a href="">||||||</a></li>
			<li><a href="">Administracion</a></li>
			</ul>
        
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12 slide">
      <div class="grid_8" >
      			<h2 class="top-1 p3">Bienvenido!</h2>
				<form id='form' action='index.php' method=post>
				<fieldset>
					<label>
					<input class='text' name='idcli' type='text' placeholder='Usuario'>
					</label>
					<label>
					<input class='text' name='password' type='password' placeholder='Contraseña'>
					</label>
				</fieldset>
				<input class="button" name="connection" type="submit" value="Ingresar"/> 
                <a href="" class="button">Registrarse</a>
				</form>

      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->
<footer>
  <p>© INTELIGENCIA DE NEGOCIOS-2023</p>
</footer>
</body>
</html>