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

<body background="fondo3.gif">

<table>
  <tr style="background-color: #F7F7FF;">
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
    <form action="sesion.php" method="post">
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
  <a href="peliculas.php"><font face="Tahoma" color="#FF8321" size="4"> Peliculas</a></font>
  <a href="series.php"> <font face="Tahoma" color="#FF8321" size="4"> Series</a> </font>
  <a href="coleccionables.php"><font face="Tahoma" color="#FF8321" size="4"> Coleccionables</a> </font>
  <a href="novedades.php"> <font face="Tahoma" color="#FF8321" size="4">Novedades</a> </font>
  <a href="nosotros.html"> <font face="Tahoma" color="#FF8321" size="4">Acerca de Nosotros</a> </font>

</center>
 <center><div class="slider">
    <ul>
      <li>
<img height="290" width="433" src="cine.JPG" alt="">
</li>
      <li>
<img height="290" width="433" src="personas.JPG" alt="">
</li>
      <li>
<img height="290" width="433" src="catalogo.JPG" alt="">
</li>
      <li>
<img height="290" width="433" src="mejor.PNG" alt="">
</li>
    </ul>
    <hr/>
  </div>
  <div style="position: relative; z-index: 10;"> <div style=" background-color: #323232; position:absolute; z-index:-1; top:0; left:0; right: 0; bottom:0; opacity:0.5;">
</center>
	<?php

            $query = "SELECT *FROM productos WHERE categoria='Pelicula'  ";
            $resultado = $conexion->query($query);

            while($row = $resultado->fetch_assoc()){ //INICION DEL CICLO PARA TRAER TODOS LOS PRODUCTOS

        ?>

        <center>
              	<img height="300" width="200"   src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/>
        				<p ><font face="Tahoma" color="#FF8321" size="4"> <?php echo $row['nombre'];?></p></font>
        				<p><font face="Tahoma" color="#FF8321" size="4"><?php echo $row['categoria'];?></p> </font>
        				<p><font face="Tahoma" color="#FF8321" size="4"><?php echo $row['precio'];?></p></font>
             <p ><a href="comprar_producto.php?id=<?php echo  $row['idproducto'];?>" ><input type="button" value="Comprar"></a> </p></font>
           <p><a href="agregar_carrito.php?id=<?php echo  $row['idproducto'];?>" > <input type="button" value="Agregar al Carrito"></a></font>



</center>





        <?php
        	}//cerramos el while

        ?>
</div>

</body>
</html>
