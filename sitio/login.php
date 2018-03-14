<?php
	// agregar.php
	
	// Validamos si existe la var de sesión ID
	session_start();
	if(isset($_SESSION['id']) == true){
		header("location: comentarios.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <img src="images/foto1.png" alt="imagen fondo">
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HH New Space</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="css/flexslider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <img src="breakdancing-battle-life-males-159273.jpeg"  alt="fondo"  >  -->
    </head>
<body background="images/foto123.jpg">        
      
    <div class="contenedor-nav">
            <a href="http://mixlr.com/trinitymiro/?utm_source=desktop_app&utm_medium=share_section&utm_campaign=31.2&utm_content=livepage_link">
            <img src="images/logoo.png" alt="logo" width="100px" height="62px" margin-left="20px" ></a>
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
                        <a href="login.php" class="menu-nav__link anchoDeLink">LogIn/ LogUp</a>
                    </li>
                    <li class="menu-nav__item">
                            <a href="radio.html" class="menu-nav__link anchoDeLink">Radio</a>
                        </li>
                </ul>
            </nav><!-- Cierra .main-nav! -->
        </div>
        <div class="pagina">
        <div class="contenedorFormulario">
            <div class="formulario">
            <h2>Log In:</h2><br>
		<form method="post" action="login_pr.php">
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="usuario" id="usuario"><br>

			<label for="clave">Contraseña:</label><br>
            <input type="password" name="clave" id="clave">
            <br>
            <br>
			
			<input type="submit" name="button" id="button" value="Ingresar"><br>
		<br>
		<h6> Si no estas registrado, hace click: <a href="formulario.php">aqui</a></h6>
       </form> 
    </div>
       <div class="imagenForm">
                    <img src="giflog.gif" alt="unete">
      </div>
    </div>
    </div>

    </div><!-- cierra pagina     -->

</body>
</html>