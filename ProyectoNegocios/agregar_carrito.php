<html>
<head>
  <link rel="stylesheet" href="carrucel.css" type="text/css" media="screen"  />
  <body>
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
<center>
  <br> </br>
  </body>
</head>
</html>

<?php
session_start();
include("conexion.php");


$id_libro = $_REQUEST['id'];

$id_usuario = $_SESSION['id_usuario'];


      $consulta = "INSERT INTO carrito (idusuario, idproducto) VALUES('$id_usuario','$id_libro')";
	   $ejecutar = mysqli_query($conexion, $consulta);

	   if($ejecutar){
	       		echo "Producto Agregado...";

	   }




?>
<p>  <a href="peliculas.php">
  <input type="button" value="Sigue Comprando"></a></p>
</center>
