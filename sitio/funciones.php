<?php 
	// funciones.php

	function nombre($id){
		// Conecto a la BD
		include("conexion.php");
		
		// Genero la query
		$quien = "SELECT nombre, apellido
				  FROM usuarios
				  WHERE id_usuario = $id";
		
		// Ejecuto la query
		$quien_ej = mysqli_query(
					$conexion, $quien
					);
		
		// Convertir en array asociativo
		$quien_reg = mysqli_fetch_array($quien_ej);
		
		// Enviar y apellido
		echo $quien_reg['nombre'] . 
		     " " . $quien_reg['apellido'];
	}

	function perfil($id){

		include("conexion.php");
		
		$perfil ="SELECT perfil
		FROM usuarios WHERE id_usuario= $id";

		$perfil_ej= mysqli_query($conexion, $perfil);

		$perfil_reg = mysqli_fetch_array($perfil_ej);

		return $perfil_reg['perfil'];
		
	}

?>








