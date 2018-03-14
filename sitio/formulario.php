<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HH New Space</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/formulario.css">
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
                <h2>Formulario de Registro:</h2>
                <form action="enviarform.php" method="post">
                    Nombre:<input type="text" name="nombre" placeholder="ingrese su nombre"> <br>
                    Apellido:<input type="text" name="apellido" placeholder="ingrese su apellido"><br>
                    E-Mail:<input type="email" name="email" placeholder="ingrese su email"><br>
					nombre de usuario: <input type="text" name="usuario"><br>
                    Contraseña: <input type="password" name="clave"><br>
                    <input type="submit" value="enviar" >
                </form>
            </div>
                <div class="imagenForm">
                    <img src="gifunete.gif" alt="unete">
                </div>
            
            </div>

    </div><!-- cierra pagina     -->
		
</body>
</html>