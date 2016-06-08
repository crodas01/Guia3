<?php
	$xml = simplexml_load_file("conex/xml_conex.xml");
	$DB_USER = $xml->user;
	$DB_PASSWORD = $xml->passw;
	$DB_NAME = "page_univ";
	
	$con = mysql_connect("localhost", $DB_USER , $DB_PASSWORD);
	mysql_select_db($DB_NAME, $con);
	
	$consulta_visita_real = "SELECT * FROM usuario WHERE loginUsuario = '".$_POST["usuLogin"]."' AND passwUsuario = '".$_POST["passwLogin"]."'; ";
	//echo $consulta_visita_real;
	$rs_visita_real = mysql_query($consulta_visita_real, $con);
	$arr_visita_real = mysql_fetch_assoc($rs_visita_real);
	if (mysql_num_rows($rs_visita_real) == 0) {
	   echo "Lo sentimos, pero el usuario ".$_POST["usuLogin"]." no se encontro en la base de datos";
	}else{
		print_r($arr_visita_real);
		$_SESSION["estado"] = $arr_visita_real["estadoUsuario"];
		$_SESSION["tipo"] = $arr_visita_real["tipoUsuario"];
		$_SESSION["nombres"] = $arr_visita_real["nombreUsuario"];
		setcookie("nombres",$arr_visita_real["nombreUsuario"]);
		setcookie("email",$arr_visita_real["emailUsuario"]);
		echo "Bienvenido|".$arr_visita_real["nombreUsuario"]."|".$arr_visita_real["tipoUsuario"];
	}
?>