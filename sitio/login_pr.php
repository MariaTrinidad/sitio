<?php
	// 1° Consigo los datos
	$usuario = $_POST['usuario'];
	// Comparo encriptado con encriptado
	$clave   = md5($_POST['clave']);
		// 2° Me conecto a la BD
	include("conexion.php");
	// 3° Creo la query (SELECT)
	$buscar = "SELECT * FROM usuarios
			   WHERE
				usuario = '$usuario'
				AND
				clave   = '$clave'
			  ";
	// 4° Ejecutar la query
	$buscar_ej = mysqli_query(
				$conexion, $buscar
				);
	
	// 5° Preguntar si NO funcionó
	if($buscar_ej == false){
		echo "Error en SQL $buscar";
	} else {
		// Pregunto si tengo resultados
		$cant = mysqli_num_rows($buscar_ej);
		if($cant === 1){
	// Conseguir el ID del usuario
	$reg = mysqli_fetch_array($buscar_ej);
	// ID $reg['id_usuario']
	// Crear una var de sesión con ese ID
	session_start();
	$_SESSION['id'] = $reg['id_usuario'];
	// Llevarlo a la sección "privada"
	// echo "El ID del usuario es ";
	// echo $_SESSION['id'];
	// Redirección
	header("location: comentarios.php");
		} else {
			echo "Datos incorrectos";
		}
	} // DANGER ZONE
	
?>










