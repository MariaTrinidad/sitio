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
    <!-- <link rel="stylesheet" href="css/estilocolaboradores.css"> -->
    <link rel="stylesheet" href="css/perfil.css">

    </head>
<body <img src="foto.jpg" alt="">>  
    <div class="pagina">
		<div class="contenedor-nav">
            <a href="http://mixlr.com/trinitymiro/?utm_source=desktop_app&utm_medium=share_section&utm_campaign=31.2&utm_content=livepage_link">
            <img src="images/logoo.png" alt="logo" width="100px" height="62px" margin-left="20px" >
        </a>
            <nav class="menuNavegador superficie">
                <ul class="menu-nav__grupo">                                
                    <li class="menu-nav__item">
                        <a href="indexmenu.html" class="menu-nav__link anchoDeLink">Home</a>
                    </li>
                    <li class="menu-nav__item">
                        <a href="eventos.html" class="menu-nav__link anchoDeLink">Ultimos Eventos</a>
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
            <div class="nombre">
            <h1>Hola! Bienvenida : <?php
			// Usamos la función nombre y le enviamos como parámetro el ID del usuario logueado
			// "boolean given" => Devolvió falso, "ver sql"
            nombre($_SESSION['id']); 
           $foto= perfil($_SESSION['id']);
           ?></h1>
           </div>
           <!-- cierra nombre -->
           <div class="perfilcontenedor">
            <?php
            echo"<img src='perfiles/$foto' alt='foto'>";
            ?>
            <form action="upload.php" method="post" enctype="multipart/form-data">
	        Subi tu imagen de perfil: <input name="userfile" type="file">
              <br>
            <input type="submit" value="Enviar">
            </form>
            </div> <!-- cierra perfilcontenedor -->
        </div> <!-- cierrra contenedoragregar -->
 
</div> <!--cierra pagina-->
</body>
</html>
