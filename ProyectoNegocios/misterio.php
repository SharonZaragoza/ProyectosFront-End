<?php
session_start();
include("conexion.php");

$correo = $_SESSION['username'];
echo $correo;

         	$query = "SELECT *FROM registros WHERE correo='$correo' ";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <header>
	<title>Libros de Misterio</title>
</head>
</header>
<link rel="stylesheet" href="CSS2.css" type="text/css" media="screen" />
<body>
	<?php

            $query = "SELECT *FROM libros WHERE categoria='misterio'  ";
            $resultado = $conexion->query($query);
            while($row = $resultado->fetch_assoc()){ //INICION DEL CICLO PARA TRAER TODOS LOS PRODUCTOS

        ?>
        			<center>
        		<p>	<img height="400" width="300" src="data:image/jpg;base64,  <?php echo base64_encode($row['imagen']); ?>"/> </p>
        				<p><?php echo $row['nombre'];?></p>
        				<p><?php echo $row['categoria'];?></p>
        				<p><?php echo $row['precio'];?></p
             <p><a href="comprar_libro.php?id=<?php echo  $row['idLibro'];?>" >Comprar</a> </p>
             <p><a href="agregar_carrito.php?id=<?php echo  $row['idLibro'];?>" >Agregar al Carrito</a> </p>




        			</center>



        <?php
        	}//cerramos el while
        ?>


</body>
</html>
