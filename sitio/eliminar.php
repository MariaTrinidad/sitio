<?php
	// eliminar.php
	
	// Conseguir el ID (id_c método GET)
	$id = $_GET['id_c'];
	
	// Me conecto a la BD
	include("conexion.php");
	
	// Escribo la query (DELETE NO SE OLVIDEN WHERE)
	$eliminar = "DELETE FROM comentarios
				WHERE id_comentario = $id
				LIMIT 1
				";
	
	// Ejecuto la query
	$eliminar_ej = mysqli_query(
				$conexion, $eliminar
					);
	
	// Pregunto si funcionó
	if($eliminar_ej == true){
		// echo "El comentario se fue.";
		header("location:  comentarios.php");
	} else {
		echo "Error SQL";
	}
	
?>









