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
    </head>
<body>    
    <div class="contenedor-nav">
            <a href="http://mixlr.com/trinitymiro/?utm_source=desktop_app&utm_medium=share_section&utm_campaign=31.2&utm_content=livepage_link">
            <img src="images/logoo.png" alt="logo" width="100px" height="62px" margin-left="20px" ></a>
            <nav class="menuNavegador">
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
                        <a href="indexmenu.html" class="menu-nav__link anchoDeLink">Registrarse</a>
                    </li>
                    <li class="menu-nav__item">
                            <a href="radio.html" class="menu-nav__link anchoDeLink">Radio</a>
                        </li>
                </ul>
            </nav><!-- Cierra .main-nav! -->
        </div>
<div class="pagina">

<?php
		// Consigo los datos del form
		$nombre = $_POST['nombre'];
		$email  = $_POST['email'];
		$apellido = $_POST['apellido'];
		$clave = md5($_POST['clave']);
        $usuario= $_POST['usuario'];
        
        echo "bienvenido a tu cuenta ". $nombre . "  " . $apellido. ".";

      //habilito conexion
        include("conexion.php");
        //genero la query
        $insertar = "INSERT INTO usuarios
				 VALUES(
					NULL,
					'$nombre',					                   
					'$apellido',
                    '$email',
					'$usuario',
                    '$clave',
                    ''
				)";
        //ejecuto

        $preguntar = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
        $ej = mysqli_query($conexion, $preguntar);
        if(mysqli_num_rows($ej) === 1 ){
            echo "Usuario existe, seleccione otro";
        } else{
                    $insertar_ej = mysqli_query(
                    $conexion, $insertar
                    );
                   //verificacion
                    if($insertar_ej == false){
                        echo "Falló, intentelo de nuevo";
                    } else {
                    echo " 
                    Bienvenido, haz click aqui para ver tu                    
                    <a href=login_pr.php'>Perfil</a>";
                    }
                }

?>	
	
</div><!--cierra pagina -->
			
</body>
</html>
