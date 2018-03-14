<?php
	// agregar.php
	
	// Validamos si existe la var de sesión ID
	session_start();
	if(isset($_SESSION['id']) == false){
       header("location: eventos.html");
    }     
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HH New Space</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="css/flexslider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estiloeventos.css">
    <!-- <img src="breakdancing-battle-life-males-159273.jpeg"  alt="fondo"  >  -->
    </head>
<body>  
        
    <div class="pagina">
  
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
                        <a href="login.php" class="menu-nav__link anchoDeLink">Perfil</a>
                    </li>
                    <li class="menu-nav__item">
                            <a href="radio.html" class="menu-nav__link anchoDeLink">Radio</a>
                        </li>
                </ul>
            </nav><!-- Cierra .main-nav! -->
        </div>         

        <div class="contenido">
            <div class="tabla">
                <table><tr>
                        <th>hora</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                    <tr>
                        <td>9am</td>
                        <td> Evento 1</td>
                        <td>Evento 2</td>
                        <td>Evento 3</td>
                        <td>Evento 4</td>
                        <td>evento 5</td>
                    </tr>
                    <tr>
                        <td>11am</td>
                        <td> Evento 1</td>
                        <td>Evento 2</td>
                        <td>Evento 3</td>
                        <td>Evento 4</td>
                        <td>evento 5</td>
                    
                    </tr>
                    <tr>
                        <td>1pm</td>
                        <td> Evento 1</td>
                        <td>Evento 2</td>
                        <td>Evento 3</td>
                        <td>Evento 4</td>
                        <td>evento 5</td>
                    </tr>
                    <tr>
                        <td>3pm</td>
                        <td> Evento 1</td>
                        <td>Evento 2</td>
                        <td>Evento 3</td>
                        <td>Evento 4</td>
                        <td>evento 5</td>
                    </tr>
                    <tr>
                        <td>5pm</td>
                        <td> Evento 1</td>
                        <td>Evento 2</td>
                        <td>Evento 3</td>
                        <td>Evento 4</td>
                        <td>evento 5</td>
                    </tr>
                    <tr>
                        <td>7pm</td>
                        <td> Evento 1</td>
                        <td>Evento 2</td>
                        <td>Evento 3</td>
                        <td>Evento 4</td>
                        <td>evento 5</td>
                    </tr>
                    <tr>
                        <td>9pm</td>
                        <td> Evento 1</td>
                        <td>Evento 2</td>
                        <td>Evento 3</td>
                        <td>Evento 4</td>
                        <td>evento 5</td>
                    </tr>
                </table>
            </div>
        </div>
        




    </div> <!-- cierra pagina     -->
<!-- -------------------------------------------------------------------------------------------------------------------------- -->
        <script src="js/jquery.js"></script>
		
		<!-- Enlazamos el archivo de Flexslider -->
		<script src="js/jquery.flexslider.js"></script>

		<!-- Una vez que cargamos los dos archivos pasamos a activar el slider // swiper -->
		<script>
			// Activamos el slider
			$(window).load(function() {
				// Por las dudas no tirar comentarios dentro de las {}
			  $('.flexslider').flexslider({
				animation: "slide", 
				direction: "horizontal"
			  });
			});
		</script>
		
</body>
</html>