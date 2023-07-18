<?php
session_start();
include("conexion.php");

$correo = $_SESSION['username'];

         	$query = "SELECT id FROM registros WHERE correo='$correo' ";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();

            $id_usuario = $row ['id'];
            $_SESSION['id_usuario'] = $id_usuario;


    	 	$id_producto = $_REQUEST['id'];

    	 	$_SESSION['id_producto'] = $id_producto;

?>
<!DOCTYPE html>
<html>
<head>  <link rel="stylesheet" href="estiloejemplo.css" type="text/css" media="screen"  />

	<title>Comprar Libro</title>
</head>
<body>
  <br> </br>
 <blockquote> <a href="inicio.php"> <img src="logo.PNG" height="75" width="195"> </a>

	<?php
  //aki
			$query = "SELECT *FROM productos WHERE idproducto = '$id_producto'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();

	  ?>

	  					<center>
        				<p>	<img height="400" width="300" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/ height="500" width="300"> </p>
        				<p><?php echo $row['nombre'];?></p>
        				<p><?php echo $row['categoria'];?></p>
        				<p><?php echo $precio_producto = $row['precio'];
        					$_SESSION['precio_producto'] = $precio_producto;
        				?></p>

        				<form action="procesar_compra.php" method="POST">
        					<input type="text" name="cantidad" placeholder="cantidad">
        					<input type="submit" name="comprar" value="Comprar">
                  <a href="forma-pago.html"><input type="button"  value="Agregar método de pago"> </a>

        				</form>


        				</center>




</body>



</html>
