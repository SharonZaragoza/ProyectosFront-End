<?php
session_start();
include("conexion.php");
$id_usuario = $_SESSION['id_usuario'];
 ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="estiloejemplo.css" type="text/css" media="screen"  />

	<title>Compras de carrito</title>
</head>
<body>
  <br> </br>
 <blockquote> <a href="inicio.php"> <img src="logo.PNG" height="75" width="195"> </a>
        <?php

      $query = " SELECT (c.idproducto),(p.nombre),(p.imagen),(p.categoria),(p.precio) FROM carrito c
        join productos p on c.idproducto=p.idproducto
        where c.idusuario='$id_usuario' ";

        $resultado = $conexion->query($query);
            while($row = $resultado->fetch_assoc()){ //INICION DEL CICLO PARA TRAER TODOS LOS PRODUCTOS


        ?>
        <center>

                <img  height="400" width="300" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/>
                <h4><?php echo $row['nombre'];?></h4>
                <p>Descripcion</p>
                <p><?php echo $row['categoria'];?></p>
                <h4><?php echo $row['precio'];?>$</h4>


                <h4><?php echo $row['idproducto'];?></h4>

                <p><a href="comprar_producto.php?id=<?php echo  $row['idproducto'];?>" ><input type="button" value="Comprar"> </a> </p>



                </div>

            </div>
        </center>


<?php
            }//FIN DEL CICLO

?>
</body>
</html>
