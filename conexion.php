<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'testing');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>