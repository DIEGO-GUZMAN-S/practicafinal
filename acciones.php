<?php
//consultas para las conexiones //
if(isset($_POST['rejistrar'])){
	$mensaje ="";
	$nombre = $conecta->real_escape_string($_POST['Nombre']);
	$apellido = $conecta->real_escape_string($_POST['Apellido']);
	$direc = $conecta->real_escape_string($_POST['direccion']);
	$tel = $conecta->real_escape_string($_POST['Telefono']); 
	$fnac = $conecta->real_escape_string($_POST['fecha_N']);
	$email = $conecta->real_escape_string($_POST['email']);
	// se declara la consulta 
	$consulta = "INSERT INTO usuarios (nombre, apellidos, direccion, telefono, fecha_N, email) 
	VALUES ('$nombre','$apellido', '$direc','$tel','$fnac','$email',)";
	$guardarcon = $conecta->query($consulta);
	if($guardarcon < 0){
		$mensaje.= "<h3 class='text-danger'> Tu rejistro no se realizo con exito </h3>";
	}
	else{
		$mensaje.= "<h3 class='text-success'> Tu rejistro se realizo con exito </h3>";
	}	
} 
?>