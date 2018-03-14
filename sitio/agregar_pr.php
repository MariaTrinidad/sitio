<?php
	// agregar_pr.php
	
	// Consigo el dato del formulario
	$comentario = $_POST['comentario'];
	
	// Consigo los otros datos
	session_start();
	$id = $_SESSION['id'];
	// Formato datetime (APROX)
	$fecha = date("Y-m-d H:i:s");
	
	// Me conecto a la BD
	include("conexion.php");
	
	// Creo la query (INSERT)
	$agregar = "INSERT INTO comentarios
				VALUES(
					NULL,
					$id,
					'$comentario',
					'$fecha'
				)";
	
	// Ejecuto la query
	$agregar_ej = mysqli_query(
				$conexion, $agregar
				);
	
	// Verifico
	if($agregar_ej == true){
		header("location: comentarios.php");
	} else {
		echo "No te acordas el formato datetime? Error SQL";
	}

?>







