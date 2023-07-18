<?php
session_start();
include("conexion.php");
$id_usuario = $_SESSION['id_usuario'];
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Compras de carrito</title>
</head>
<body>
 <body>
        <?php




      $query = " SELECT (c.idLibro),(p.nombre),(p.imagen),(p.categoria),(p.precio) FROM carrito c
        join libros p on c.idLibro=p.idLibro
        where c.idusuario='$id_usuario' ";

        $resultado = $conexion->query($query);
            while($row = $resultado->fetch_assoc()){ //INICION DEL CICLO PARA TRAER TODOS LOS PRODUCTOS


        ?>
        <center>

                <img img height="400" width="300" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/>
                <h4><?php echo $row['nombre'];?></h4>
                <p>Descripcion</p>
                <p><?php echo $row['categoria'];?></p>
                <h4><?php echo $row['precio'];?>$</h4>


                <h4><?php echo $row['idLibro'];?></h4>

                <p><a href="comprar_libro.php?id=<?php echo  $row['idLibro'];?>" >Comprar Libro</a> </p>



                </div>

            </div>
        </center>


<?php
            }//FIN DEL CICLO

?>
</body>
</html>
