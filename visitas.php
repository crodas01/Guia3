<?php
	$xml = simplexml_load_file("conex/xml_conex.xml");
	$DB_USER = $xml->user;
	$DB_PASSWORD = $xml->passw;
	$DB_NAME = "page_univ";
	
	$con = mysql_connect("localhost", $DB_USER , $DB_PASSWORD);
	mysql_select_db($DB_NAME, $con);
	
	$hoy = date("Y-m-d");
	$consulta_visita_real = "SELECT * FROM visitas WHERE fechaVisitas = '$hoy' AND ipVisitas = '".$_SERVER['REMOTE_ADDR']."'";
	$rs_visita_real = mysql_query($consulta_visita_real, $con);
	if (mysql_num_rows($rs_visita_real) == 0) {
	   $hoy = date("Y-m-d");
	   $insert_real = "INSERT INTO visitas (ipVisitas, fechaVisitas, cantidadVisitas) VALUES ('".$_SERVER['REMOTE_ADDR']."', '$hoy', 1)";
	   mysql_query($insert_real, $con);
	}else{
		$consulta_visita_real = "SELECT SUM(cantidadVisitas) as cantidadVisitas FROM visitas";
		$rs_visita_real = mysql_query($consulta_visita_real, $con);
		$arr_visita_real = mysql_fetch_assoc($rs_visita_real);
		
		$_COOKIE["cantidadVisitas"] = str_pad($arr_visita_real["cantidadVisitas"], 3, "0", STR_PAD_LEFT);
		$_SESSION["cantidadVisitas"] = str_pad($arr_visita_real["cantidadVisitas"], 3, "0", STR_PAD_LEFT);
	}
?>