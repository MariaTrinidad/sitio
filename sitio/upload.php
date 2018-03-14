<!DOCTYPE html>
<html>
<head>
	<title>Agregar tu foto de perfil</title>
	<meta charset="utf-8" >
</head>
<body>
<div>
  <div>
    <h3>Subir tu imagen de perfil</h3>
    <p><?php
// Configuraci�n
$folder = "perfiles/"; // Carpeta a la que queremos subir los archivos
$maxlimit = 6000000; // M�ximo l�mite de tama�o (en bits), menos de 1mb
$allowed_ext = "jpg,png,gif"; // Extensiones permitidas (usar una coma para separarlas)
$overwrite = "no"; // Permitir sobreescritura? (yes/no)

$match = ""; 
$filesize = $_FILES['userfile']['size']; // toma el tama�o del archivo
$filename = strtolower($_FILES['userfile']['name']); // toma el nombre del archivo y lo pasa a min�sculas


if(!$filename || $filename==""){ // mira si no se ha seleccionado ning�n archivo
   $error = "- Ning�n archivo selecccionado para subir.<br>";
}elseif(file_exists($folder.$filename) && $overwrite=="no"){ // comprueba si el archivo existe ya
   $error = "- El archivo <b>$filename</b> ya existe<br>";
}

// comprobar tama�o de archivo
if($filesize < 1){ // el archivo est� vac�o
   $error .= "- Archivo vac�o.<br>";
}elseif($filesize > $maxlimit){ // el archivo supera el m�ximo
   $error .= "- Este archivo supera el m�ximo tama�o permitido.<br>";
}

$file_ext = preg_split("/\./",$filename); 
$allowed_ext = preg_split("/\,/",$allowed_ext); // verifica extension
foreach($allowed_ext as $ext){
   if($ext==$file_ext[1]) $match = "1"; // Permite el archivo
}

if(!$match){
   $error = "- Este tipo de archivo no est&aacute; permitido: $filename<br>";
}

if(isset($error)==true){
   echo "Se ha producido el siguiente error al subir el archivo:<br> $error"; // Muestra los errores
}else{
   if(move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$filename)){ // Finalmente sube el archivo
	  // Avisarle a la BD que X usuario subi� una imagen y pasarle el nombre del archivo y la extensi�n
	  session_start();
	  $id = $_SESSION['id'];

	  // Me conecto a la BD
	  include("conexion.php");
	  // Genero la query (UPDATE)
	  $actualizar = "UPDATE usuarios
					 SET perfil = '$filename'
					 WHERE id_usuario = $id";
	  // Ejecuto la query
	  $actualizar_ej = mysqli_query(
					$conexion, $actualizar
					);
	  if($actualizar_ej == false ){
		  echo "Ver SQL :(";
	  } else {
		echo "<b>$filename</b> se ha subido correctamente!"; 
	  }
   }else{
      echo "Error! Puede que el tama�o supere el m�ximo permitido por el servidor. Int�ntelo de nuevo."; // Otro error
   }
}

?>

    </p>

  </div>
</div>
</body>
</html>
