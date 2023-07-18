<?php
session_start();
include("conexion.php");


$id_libro = $_REQUEST['id'];

$id_usuario = $_SESSION['id_usuario'];


      $consulta = "INSERT INTO carrito(idusuario,idlibro) VALUES('$id_usuario','$id_libro')";
	   $ejecutar = mysqli_query($conexion, $consulta);

	   if($ejecutar){
	       		echo "libro agregado...";

	   }




?>
