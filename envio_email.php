<?php 

$nombre = $_POST['nombre'];
$email 	= $_POST['email'];
$consulta = $_POST['mensaje'];

$destino = "capoleonind@gmail.com";

$asunto = "Consulta enviada desde www.capoleonindustries.com.mx";

$mensaje  ="Nombre: ".$nombre."\r\n";
$mensaje .="Email: ".$email."\r\n";
$mensaje .="Consulta. ".$consulta."\r\n";

$remitente = "From: paginainformativa@capoleonind.com.mx";

mail($destino, $asunto, $mensaje, $remitente);

header("Location:index.php?i=ok");


?>