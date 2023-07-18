<?php
include("conexion.php");

if (isset($_REQUEST['enviar'])) {


$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
//aki
$query = "INSERT INTO productos(imagen,nombre,categoria,precio) VALUES('$Imagen','$nombre','$categoria','$precio')";
$resultado = $conexion->query($query);
//FALTA AGREGAR VARIABLE DE SESION
if($resultado){

    echo "Libro registrado";

}else{

    echo "Error 404 no found";
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Subir Productos</title>
</head>
<body>
<!--aki-->
	<form action="subirProducto.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="Imagen" placeholder="subir imagen del producto" required><br>
		<input type="text" name="nombre" placeholder="Ingresa nombre del producto" required><br>
		<input type="text" name="categoria" placeholder="Ingresa la categoria" required><br>
		<input type="text" name="precio" placeholder="Ingresa el precio" required><br>
		<input type="submit" name="enviar" value="agregar producto">
	</form>

</body>
</html>
