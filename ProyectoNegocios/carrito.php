<?php
session_start();
include("conexion.php");
//aki
$id_usuario = $_SESSION['id_usuario'];
$id_producto = $_SESSION['id_producto'];
$precio_producto = $_SESSION['precio_producto'];
$cantidad = $_POST['cantidad'];




  function total($cantidad,$precio_producto)
  {
 $total=($cantidad*$precio_producto);
    return $total;
  }

 $precio_final=total($cantidad, $precio_producto);
 //CONSULTA HACIA NUESTRA BD
          $consulta = "INSERT INTO ventas(id_producto, id_usuario, precio_producto, cantidad, total) VALUES('$id_producto','$id_usuario', '$precio_produc','$cantidad','$precio_final')";
         //VAIRABLE PARA EJECUTAR NUESTRA CONSULTA Y  NUESTRA CONEXION
 	     $ejecutar = mysqli_query($conexion, $consulta);

 	   		if ($ejecutar) {
 	   			echo "Libro Comprado!..";
 	   		}
        else {
 	   			echo "Error...";
}

?>
<!DOCTYPE html>
      <html>
      <head>
      	<title>Gracias por tu compra</title>
      </head>
      <body>
      <?php
      $sql="SELECT * FROM ventas WHERE  id_usuario='$id_usuario'";

      $result=mysqli_query($conexion,$sql);
      while ($mostrar=mysqli_fetch_array($result))
      {

?>

          <?php  echo $mostrar['id_venta']?>
          <?php  echo $mostrar[  'id_producto']?>
          <?php echo $mostrar[  'id_usuario']?>
          <?php  echo $mostrar[  'precio_producto']?>
          <?php    echo $mostrar[ 'cantidad']?>
         <?php    echo $mostrar[  'total']?>
           <br>  </br>
           <hr/>
      <?php
            }

            ?>
            <form action="biblioteca.php" method="POST">
            <input type="submit" name="comprar" value="Seguir Comprando">
            </form>
            <form action="realizar_compra.php" method="POST">
              <input type="button" value="Comprar">
          <a href="procesar_compra.php">  <input type="button" name="comprar" value="Comprar"> </a>
          </form>
      </body>
      </html>
