<?php
session_start();
include("conexion.php");
//aki
$id_usuario = $_SESSION['id_usuario'];
$id_producto = $_SESSION['id_producto'];
$precio_producto = $_SESSION['precio_producto'];
$cantidad = $_POST['cantidad'];


//aki
  function total($cantidad,$precio_producto)
  {
 $total=($cantidad*$precio_producto);
    return $total;
  }
//aki
 $precio_final=total($cantidad, $precio_producto);
 //CONSULTA HACIA NUESTRA BD
          $consulta = "INSERT INTO ventas(id_producto, id_usuario, precio_producto, cantidad, total) VALUES('$id_producto','$id_usuario', '$precio_producto','$cantidad','$precio_final')";
         //VAIRABLE PARA EJECUTAR NUESTRA CONSULTA Y  NUESTRA CONEXION
 	     $ejecutar = mysqli_query($conexion, $consulta);

 	   		if ($ejecutar) {
 	   			echo "Producto Comprado!..";
 	   		}
        else {
 	   			echo "Error...";
}

?>
<!DOCTYPE html>
      <html>
      <head>
        <link rel="stylesheet" href="carrucel.css" type="text/css" media="screen"  />

      	<title>Gracias por tu compra</title>
      </head>
      <body>
        <br> </br>
        <blockquote> <a href="inicio.php"> <img src="logo.PNG" height="75" width="195"> </a>
      <?php

            $query = "SELECT * from ventas where id_usuario= '$id_usuario' order by id_venta desc; ";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();

            	?>

            	<center>
            			<p>---- TICKET DEL CLIENTE ---</p><br>
        				<p> Numero de venta: <?php echo $row['id_venta'];?></p><br>
        				<p>Codigo del producto: <?php echo $row['id_producto'];?></p><br>
        				<p>Precio del producto: <?php echo $row['precio_producto'];?></p><br>
        				<p>Cantidad: <?php echo $row['cantidad'];?></p><br>
        				<p>El total de tu compra es:  <?php echo $row['total'];?></p><br>
        			</center>
      </body>
      </html>
