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
			<br /><br /><br /><br />
			<div style="width: 100%">
				<hr>
				<a id="SERVICIOS"><h1>NUESTROS SERVICIOS</h1></a>
				<hr>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/virtualizacion2.png" alt="Virtualizacion" onclick="mostrar_virtual()">
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/traslado_datacenter.png" alt="Traslado de DataCenter" onclick="mostrar_trasla()">
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/monitoreo_gestion.png" alt="Monitoreo y Gestion" onclick="mostrar_monit()"> 
				</div>
				<div style="float: left; width: 25%; text-align: center;">
					<img src="images/respaldo_informacion.png" alt="Respaldo de Informacion" onclick="mostrar_respal()">
				</div>
				<hr>
			</div>
			
			<div style="width: 100%; text-align: center; display: none;" id="VIRTUAL">
				<img src="images/virtualizacion2.png" alt="Virtualizacion" align="left" style="margin-left: 2em"  >
				<br />
				<div align="justify" style="margin-left: 2em; width: 75%">
					Con la adopción de tecnologías de virtualización hoy en día las organizaciones encuentran, entre otros, los siguientes beneficios:<br />
					<li>​​​Reducir los costos en hardware y operación.</li>
					<li>Alcanzar mayor eficiencia en los centros de datos reduciendo su complejidad.</li>
					<li>Tener rápido aprovisionamiento de servidores</li><li>AAumentar la disponibilidad de los servicios</li>
					<li>Elimina el sobre aprovisionamiento de servidores físicos</li>
					<li>Reducir el impacto ambiental de TI.</li>
				</div>
			</div>
			<br />
			<div class="clear"></div>
			<div style="width: 100%;  text-align: center; display: none" id="TRASLA">
				<div style="width: 25%; text-align: center;">
					<img src="images/traslado_datacenter.png" alt="Traslado de DataCenter"  align="left"  style="margin-left: 2em" >
				</div>
				<br />
				<div align="justify" style="margin-left: 2em; width: 75%" >
					Entregamos la consultoría en la planeación y diseño para el traslado del centro de datos de su compañía. Proveemos el Servicio de Traslado de Equipos de Cómputo entre Datacenters ubicados en una misma ciudad o entre dos ciudades, brindando las condiciones adecuadas de seguridad para proteger los equipos contra cualquier tipo de riesgo durante el movimiento.

				</div>
			</div>
			<br />
			<div class="clear"></div>
			<div style="width: 100%; display: none;" id="MONIT">
				<div style="width: 25%; text-align: center; ">
					<img src="images/monitoreo_gestion.png" alt="Monitoreo y Gestion"  align="left" style="margin-left: 2em" >
				</div>
				<br />
				<div align="justify" style="margin-left: 2em; width: 75%">
					Contamos con el mejor equipo humano certificado y con las mejores prácticas del mercado como lo es ITIL para apoyarlo en la administración, mantenimiento, gestión y soporte de sus infraestructuras de misión crítica, basados en procesos, enfocados a alinear sus servicios con las necesidades de su empresa, como:
					<br />
					<li>Monitoreo de servidores.</li>
					<li>Monitoreo de licenciamiento.</li>
					<li>Monitoreo de infraestructura.</li>
					<li>Todo en un esquema 7X24X365</li>

				</div>
			</div>
			<br />
			<div class="clear"></div>
			<div style="width: 100%; display: none"  id="RESPAL">
				<div style="width: 25%; text-align: center;">
					<img src="images/respaldo_informacion.png" alt="Respaldo de Informacion"  align="left"  style="margin-left: 2em" >
				</div>
				<br />
				<div align="justify" style="margin-left: 2em; width: 75%">
					Con la adopción de tecnologías de virtualización hoy en día las organizaciones encuentran, entre otros, los siguientes beneficios:
					<br />
					<li>​​​Reducir los costos en hardware y operación.</li>
					<li>Alcanzar mayor eficiencia en los centros de datos reduciendo su complejidad.</li>
					<li>Tener rápido aprovisionamiento de servidores</li>
					<li>​Aumentar la disponibilidad de los servicios</li>
					<li>Elimina el sobre aprovisionamiento de servidores físicos</li>
					<li>Reducir el impacto ambiental de TI.</li>
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