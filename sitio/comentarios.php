<?php
	// Validamos si existe la var de sesión ID
	session_start();
	if(isset($_SESSION['id']) == false){
		header("location: login.php");
    }
    include("funciones.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HH New Space</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilocolaboradores.css">
    <!-- <img src="breakdancing-battle-life-males-159273.jpeg"  alt="fondo"  >  -->
    </head>
<body>  
    <div class="pagina">
		<div class="contenedor-nav">
            <a href="http://mixlr.com/trinitymiro/?utm_source=desktop_app&utm_medium=share_section&utm_campaign=31.2&utm_content=livepage_link">
            <img src="images/logoo.png" alt="logo" width="100px" height="62px" margin-left="20px" >
        </a>
            <nav class="menuNavegador superficie">
                <ul class="menu-nav__grupo">                                
                    <li class="menu-nav__item">
                        <a href="indexmenu.php" class="menu-nav__link anchoDeLink">Home</a>
                    </li>
                    <li class="menu-nav__item">
                        <a href="eventos.php" class="menu-nav__link anchoDeLink">Ultimos Eventos</a>
                    </li>
                    <li class="menu-nav__item">
                        <a href="comentarios.php" class="menu-nav__link anchoDeLink">Nuevos Colaboradores</a>
                    </li>
                    <li class="menu-nav__item">
                        <a href="perfil.php" class="menu-nav__link anchoDeLink">Perfil</a>
                    </li>
                    <li class="menu-nav__item">
                            <a href="radio.html" class="menu-nav__link anchoDeLink">Radio</a>
					</li>

                </ul>
        	</nav><!-- Cierra .main-nav! -->
			<div class="cerrar">
		    <a href="cerrar.php">Cerrar Sesion</a>	
		</div>  
		
		</div>
		<div class="contenedor_agregar">  
		<h1>Hola <?php
			// Usamos la función nombre y le enviamos como parámetro el ID del usuario logueado
			
			// "boolean given" => Devolvió falso, "ver sql"
			nombre($_SESSION['id']);
		?></h1>
        <form action="agregar_pr.php" method="post">
			<h1>Nuevo Comentario:</h1><br>
			<textarea name="comentario"></textarea>
			
			<br>
			<input type="submit" value="Agregar">
		</form>

</div>
<div class="comentarios">
		
		<?php
			// Conseguimos los comentarios
			include("conexion.php");
			$comentarios = "
						SELECT * FROM comentarios
						ORDER BY fecha DESC
						LIMIT 20
						";
			// Ejecutar la query
			$comentarios_ej = mysqli_query(
					$conexion, $comentarios
					);
			// Preguntar si es == false
            // fetch array
    
    while( $reg_com = mysqli_fetch_array($comentarios_ej)){
    		echo "<div class='div'>";// Reutilizamos la función de nombre()
		echo "<h2>";
		 nombre($reg_com['id_usuario']);
		echo "</h2>";
		echo "<p>" . $reg_com['comentario'] . "</p>";
		
		// Si el usuario logueado es el mismo que el autor del comentario le dejo borrarlo
		if(
			$_SESSION['id'] == $reg_com['id_usuario']
		){
			//echo "Podes borrarlo";
			?>
		<!-- 
			<input type="hidden" value="" name=""> 
		-->
		<a href="eliminar.php?id_c=<?php
			echo $reg_com['id_comentario'];
		?>">Eliminar Comentario</a>		
			<?php			
		}
        echo "<br><br><hr>";	
        echo"</div>";	
	}
		?>
	
	
 </div><!--cierra comentarios-->

 
    </div>
</body>
</html>