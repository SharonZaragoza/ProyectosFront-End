<?php
session_start();
include("conexion.php");

$correo = $_SESSION['username'];
echo $correo;

         	$query = "SELECT *FROM registros WHERE correo='$correo' ";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();

            $id_usuario=$row['id'];
            $_SESSION['id_usuario']=$id_usuario;
?>

<!DOCTYPE html>
<head >
 <link rel="stylesheet" href="carrucel.css" type="text/css" media="screen"  />
<title>Media+</title>

</head>

<body background="fondo.gif" >

<table>
  <tr>
    <td> <blockquote> <a href="inicio.php"> <img src="logo.PNG" height="75" width="195"> </a> </td>
    <td WIDTH="2700"  HEIGHT="60"> <div class="flexsearch">
        <div class="flexsearch--wrapper">
          <form class="flexsearch--form" action="#" method="post">
            <div class="flexsearch--input-wrapper">
              <input class="flexsearch--input" type="search" placeholder="search">
            </div>
            <input class="flexsearch--submit" type="submit" value="&#10140;"/>
          </form>
        </div>
    </div> </td>
    <form action="login.php" method="post">
  <td scope="col" class="last">  <input type="image" src="logo(inicio).PNG" alt="Submit" align="right" width="35" height="30">   </td>
<td> <a href="login.php" style="color:#2C3BA4; text-decoration:none">  Iniciar Sesion</a>  </td>
</form>
<form action="comprasCarrito.php" method="post">
<td scope="col" class="last"><input type="image" src="carrito2.PNG" alt="Submit" align="right" width="35" height="30"> </td>
<td> <a href="comprasCarrito.php" style="color:#2C3BA4; text-decoration:none" align="right">  Carrito</a> </td>
</form>
  </tr>


</table>

</blockquote>


<div class="fixed-separation">&nbsp;</div>
<div class="tabs"></div>
<hr/>
<div class="back" >
<nav><center>
  <a href="peliculas.php">Peliculas</a>
  <a href="series.php">Series</a>
  <a href="coleccionables.php">Coleccionables</a>
  <a href="novedades.php">Novedades</a>
  <a href="nosotros.html">Acerca de Nosotros</a>

</center>
 <center><div class="slider">
    <ul>
      <li>
<img height="290" width="433" src="c1.JPG" alt="">
</li>
      <li>
<img height="290" width="433" src="c2.JPG" alt="">
</li>
      <li>
<img height="290" width="433" src="c3.PNG" alt="">
</li>
      <li>
<img height="290" width="433" src="p4.PNG" alt="">
</li>
    </ul>
    <hr/>
  </div></center>	<?php

            $query = "SELECT *FROM productos WHERE categoria='Coleccionables'  ";
            $resultado = $conexion->query($query);
            while($row = $resultado->fetch_assoc()){ //INICION DEL CICLO PARA TRAER TODOS LOS PRODUCTOS

        ?>
        			<center>
        		<p>	<img height="400" width="300"   src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/> </p>
        				<p> <font face="Tahoma" color="#FF8321" size="4"> <?php echo $row['nombre'];?></p> </form>
        				<p><font face="Tahoma" color="#FF8321" size="4"> <?php echo $row['categoria'];?></p> </form>
        				<p><font face="Tahoma" color="#FF8321" size="4"> <?php echo $row['precio'];?></p> </form>
             <p><a href="comprar_producto.php?id=<?php echo  $row['idproducto'];?>" > <input type="button" value="Comprar"></a> </p>
             <p><a href="agregar_carrito.php?id=<?php echo  $row['idproducto'];?>" > <input type="button" value="Agregar al Carrito"></a> </p>



        			</center>



        <?php
        	}//cerramos el while
        ?>


</body>
</html>
