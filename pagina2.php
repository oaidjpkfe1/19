<?php 
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

 	echo $nombre. "ha dicho <br/>".$mensaje;
	if(mail('lusigonzales06.com', $correo, $mensaje)){
	


	
header("Location:gracias.html");
 ?>