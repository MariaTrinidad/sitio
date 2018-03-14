<?php
	// cerrar.php
	
	// Habilitar el uso de sesiones
	session_start();
	
	// DESTRUIR a la sesión de nombre
	session_destroy();

	header("location: indexmenu.php");
?>