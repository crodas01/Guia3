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
			<div style="width: 100%;" >
				<form class="contact_form" action="#" id="contact_form" onsubmit="return validateForm()" runat="server"> 
					<div align="left" style="padding-top: 80px; padding-left: 80px">
						<ul> 
							<li>
								<iframe src="https://www.google.com/maps/d/embed?mid=1J6TWt5P5vY_60GIKMMP09O8zpFo" width="100%" height="300px"></iframe>
							</li>
							<li> <h2>Contactos</h2> 
								<span class="required_notification">* Datos requeridos</span> 
							</li> 
							<li> 
								<label for="nomb">Nombre:</label> 
								<input type="text" id="nomb" name="nomb" placeholder="John Doe" required /> 
							</li> 
							<li> 
								<label for="email">Email:</label> 
								<input type="email" name="email" id="email" placeholder="info@developerji.com" required /> 
								<span class="form_hint">Formato correcto: "name@something.com"</span> 
							</li> 
							<li> 
								<label for="telef">Telefono:</label> 
								<input type="tel" name="telef" id="telef" placeholder="1-555555" required  /> 
								<span class="form_hint">Formato correcto: "1-555555"</span> 
							</li>
							<li> 
								<label for="date">Fecha de Nacimiento:</label> 
								<input type="date" name="date" id="date" placeholder="mm/dd/yyyy" required  /> 
								<span class="form_hint">Formato correcto: "mm/dd/yyyy"</span> 
							</li> 
							<li> 
								<label for="message">Mensaje:</label> 
								<textarea name="message" cols="40" rows="6" required></textarea> 
							</li>
							<li> 
								<label for="ciclo">Numero de iteraciones:</label> 
								<input type="number" name="ciclo" placeholder="Digite un numero entero para probar ciclos" required  /> 
								<span class="form_hint">Digite un numero entero</span> 
							</li> 
							<li> 
								<button class="submit" type="submit">Enviar mensaje</button> 
							</li> 
						</ul> 
					</div> 
				</form>
			</div>
			
		</header>
		<!-- Cuerpo de la pagina -->
		<footer style="width: 100%">
			<p>2016 &reg; Derechos reservados</p>
		</footer>
	</div>
</body>
</html>