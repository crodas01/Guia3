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
			<div style="width: 100%">
				<hr>
				<h1>INDEX CLIENTE</h1>
				<hr>
				<br /><br />
				<b>BIENVENIDO</b> <br /><br />
				<b>USUARIO:</b> <?php echo $_COOKIE["nombres"];?> <br />
				<b>CORREO:</b> <?php echo $_COOKIE["email"];?> <br />
			</div>
		</header>
		<!-- Cuerpo de la pagina -->
		<footer style="width: 100%">
			<p>2016 &reg; Derechos reservados</p>
		</footer>
	</div>
</body>
</html>