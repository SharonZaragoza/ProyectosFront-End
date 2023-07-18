<?php
session_start();
include("conexion.php");
$correo = $_SESSION['username'];


if (isset($_REQUEST['cambiar_nombre'])) {

$nombre = $_POST['nombre'];
$query = "UPDATE registros SET nombre='$nombre' WHERE correo='$correo' ";
$resultado = $conexion->query($query);

if($resultado){
    echo '<script>window.location="perfil.php"</script>';
}


}
if (isset($_REQUEST['cambiar_clave'])) {

$clave = $_POST['clave'];
$query = "UPDATE registros SET clave='$clave' WHERE correo='$correo' ";
$resultado = $conexion->query($query);

if($resultado){
    echo '<script>window.location="perfil.php"</script>';
}



}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Configuracion de Perfil</title>


<!--Link de los esilos...-->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
<link href="estilo/estilos.css" rel="stylesheet">


</head>
<body>
	<center>
		<!--Encabezado...-->
						<h1>Configuracion de perfil</h1>
	 	<!-- Archivo que enviara nuestros parametros y el metodo por el cual se eniaran-->

	<form action="config_perfil.php" method="POST">

	 <h1>Cambiar Nombre de Usuario</h1>
	<input type="text" name="nombre"><br>
	<input type="submit" name="cambiar_nombre" value="cambiar Nombre">


	 <h1>Cambiar Contraseña</h1>
	<input type="password" name="clave" autocomplete="off"><br>
	<input type="submit" name="cambiar_clave" value="cambiar contraseña" autocomplete="off">

	</form>

	<a href="perfil.php">Volver a mi perfil</a>

	</center>


</body>
</html>
