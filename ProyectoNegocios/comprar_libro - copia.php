<?php
session_start();
include("conexion.php");

$correo = $_SESSION['username'];

         	$query = "SELECT id FROM registros WHERE correo='$correo' ";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();

            $id_usuario = $row ['id'];
            $_SESSION['id_usuario'] = $id_usuario;


    	 	$id_libro = $_REQUEST['id'];

    	 	$_SESSION['id_libro'] = $id_libro;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Comprar Libro</title>
</head>
<body>
	<?php
			$query = "SELECT *FROM libros WHERE idLibro = '$id_libro'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();

	  ?>
	  					<center>
        				<p>	<img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/> </p>
        				<p><?php echo $row['nombre'];?></p>
        				<p><?php echo $row['categoria'];?></p>
        				<p><?php echo $precio_libro = $row['precio'];
        					$_SESSION['precio_libro'] = $precio_libro;
        				?></p>

        				<form action="procesar_compra.php" method="POST">
        					<input type="text" name="cantidad" placeholder="cantidad">
        					<input type="submit" name="comprar" value="comprar">
        				</form>


        				</center>




</body>



</html>
