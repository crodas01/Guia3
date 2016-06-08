<?php
session_start();
include("visitas.php");
?>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Sito Consultoria</title>
	<meta name="description" content="Pagina web virtualizacion">
	<meta name="author" content="Raul Andres Ascencio">
	<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
	<link href="css/StyleSheet.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/general.js"></script>
</head>
<body>
	<audio src="audio/audio.mp3" autoplay="true" loop="true"></audio>
	<div id="contenedor">
		
		<header>
			
			<div id="menu" style="width: 100%; text-align: center">
				
				<div id="header_img" style="width: 80%">
					<img style="float: left;" src="images/logo.png" alt="SITO COnsultoria" width="180" height="50" class="imgcenter" >
					<a href="https://twitter.com" target="_blank"><img src="images/twitter.png" alt="Twitter" width="33" height="33" class="imgcenter" style="padding-left: 10px" ></a>
					<a href="https://www.youtube.com/" target="_blank"><img src="images/youtube.png" alt="Youtube" width="33" height="33" class="imgcenter" style="padding-left: 10px" ></a>
					<a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" alt="Facebook" width="33" height="33" class="imgcenter" style="padding-left: 10px"></a>
					<a href="https://co.linkedin.com/" target="_blank"><img src="images/linkedin.png" alt="Linked-In" width="33" height="33" class="imgcenter" style="padding-left: 100px"></a>
					<?php 
					$array  = array_map('intval', str_split($_COOKIE["cantidadVisitas"]));
					$array = array_reverse($array);

					foreach($array as $linea){
						echo '<a><img src="images/'.$linea.'.PNG" alt="'.$linea.'" width="33" height="33" class="imgcenter"></a>';
					}?>
				</div>
				<div id="wrapper" style="width: 200px; float: right;">
		 
				    <ul class="menu">
				        <li class="item1"><a href="#">Menu</a>
							<ul>
								<li class="subitem1"><a href="index.php">Home</a></li>
								<li class="subitem2"><a href="#NOSOTROS">Nosotros</a></li>
								<li class="subitem3"><a href="servicios.php#SERVICIOS">Servicios</a></li>
								<li class="subitem4"><a href="contacto.php">Contactenos</a></li>
								<li class="subitem4"><a href="login.php#INICIO_SESION">Iniciar Sesion</a></li>
							</ul>
				        </li>
				    </ul>
				 
				</div>
			</div>
			
			<br />
			<div style="width: 100%;" >
				<img src="images/header.png" width="100%" height="20%" alt="Header">
			</div>
			<br /><br /><br /><br />
			<div style="width: 100%">
				<hr>
				<h1>NOS ESPECIALIZAMOS EN</h1>
				<hr>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/virtualizacion.png" alt="Virtualizacion" width="185" height="116">
					<br />Virtualizaci&oacute;n de centros de datos y servidores
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/optimizacion.png" alt="Optimizacion" width="185" height="116">
					<br />Optimizaci&oacute;n de entornos virtuales
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/operacion.png" alt="Operacion" width="185" height="116">
					<br />Operaci&oacute;n infraestructura virtual
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/implementacion.png" alt="Implementacion" width="185" height="116">
					<br />Implementaci&oacute;n de esquemas de backup
				</div>
				<hr>
				<a id="NOSOTROS"><h1>PORQUE NOSOTROS</h1></a>
				<hr>
				<div style="float: left; width: 33%; text-align: center;">
					<img src="images/experiencia.png" alt="Experiencia" width="185" height="116">
					<br /><b>EXPERIENCIA</b><br /> M&aacute;s de 5 a&ntilde;os de experiencia.<br />M&aacute;s de 500 servidores virtualizados.<br />Profesionales certificados
				</div>
				<div style="float: left; width: 33%; text-align: center;">
					<img src="images/servicio.png" alt="Servicio" width="185" height="116">
					<br /><b>SERVICIO</b><br /> Disponibilidad 7/24.<br />Asesor&iacute;a permanente
				</div>
				<div style="float: left; width: 33%; text-align: center;">
					<img src="images/enfoque.png" alt="Enfoque" width="185" height="116">
					<br /><b>ENFOQUE</b><br /> Soluciones a la medida de su negocio
				</div>
			</div>
		</header>
		<!-- Cuerpo de la pagina -->
		<footer style="width: 100%">
			<p>2016 &reg; Derechos reservados</p>
		</footer>
	</div>
</body>
</html>