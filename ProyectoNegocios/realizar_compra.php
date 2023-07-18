<?php
session_start();
include("conexion.php");
//aki
$id_usuario = $_SESSION['id_usuario'];
$id_producto = $_SESSION['id_producto'];
$precio_producto = $_SESSION['precio_producto'];
$cantidad = $_POST['cantidad'];
$total= $_SESSION['total'];
?>
<!DOCTYPE html>
      <html>
      <head>
      	<title>Gracias por tu compra</title>
      </head>
      <body>
    <p> Gracias por tu compra </p>
    <form action="biblioteca.php" method="POST">
   <input type="submit" name="comprar" value="Seguir Comprando">
   </form>

      </body>
      </html>
