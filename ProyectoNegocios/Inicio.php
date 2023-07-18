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
 <link rel="stylesheet" href="estiloejemplo.css" type="text/css" media="screen"  />
 <link rel="stylesheet" href="diseño-footer.css" type="text/css" media="screen"  />

<title>Media+</title>

</head>

<body style="background-color:#F7F7FF" >
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
  <style>
    .slide {
      position: relative;
      box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
      margin-top: 26px;
    }

    .slide-inner {
      overflow: hidden;
      width: 200%;
      height: calc( 300px + 3em);
    }

    .slide-open:checked + .slide-item {
      position: static;
      opacity: 100;
    }

    .slide-item {
      position: absolute;
      opacity: 0;
      -webkit-transition: opacity 0.6s ease-out;
      transition: opacity 0.6s ease-out;
    }

    .slide-item img {
      display: block;
      height: auto;
      max-width: 100%;


    }

    .slide-control {
      background: rgba(0, 0, 0, 0.28);
      border-radius: 50%;
      color: #fff;
      cursor: pointer;
      display: none;
      font-size: 40px;
      height: 40px;
      line-height: 35px;
      position: absolute;
      top: 50%;
      -webkit-transform: translate(0, -50%);
      cursor: pointer;
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%);
      text-align: center;
      width: 40px;
      z-index: 10;
    }

    .slide-control.prev {
      left: 2%;
    }

    .slide-control.next {
      right: 2%;
    }

    .slide-control:hover {
      background: rgba(0, 0, 0, 0.8);
      color: #aaaaaa;
    }

    #slide-1:checked ~ .control-1,
    #slide-2:checked ~ .control-2,
    #slide-3:checked ~ .control-3 {
      display: block;
    }

    .slide-indicador {
      list-style: none;
      margin: 0;
      padding: 0;
      position: absolute;
      bottom: 2%;
      left: 0;
      right: 0;
      text-align: center;
      z-index: 10;
    }

    .slide-indicador li {
      display: inline-block;
      margin: 0 5px;
    }

    .slide-circulo {
      color: #828282;
      cursor: pointer;
      display: block;
      font-size: 35px;
    }

    .slide-circulo:hover {
      color: #aaaaaa;
    }

    #slide-1:checked ~ .control-1 ~ .slide-indicador li:nth-child(1) .slide-circulo,
    #slide-2:checked ~ .control-2 ~ .slide-indicador li:nth-child(2) .slide-circulo,
    #slide-3:checked ~ .control-3 ~ .slide-indicador li:nth-child(3) .slide-circulo {
      color: #428bca;
    }

    #titulo {
      width: 100%;
      position: absolute;
      padding: 0px;
      margin: 0px auto;
      text-align: center;
      font-size: 27px;
      color: rgba(255, 255, 255, 1);
      font-family: 'Open Sans', sans-serif;
      z-index: 9999;
      text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
    }
  </style>
  </head>
  <body>
<a href="peliculas.php">  <div class="slide">
    <div class="slide-inner">
      <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
      <div class="slide-item">
        <img src="pelis.PNG" height="330" width="1330">
      </div>
      <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
      <div class="slide-item">
        <img src="funkos.PNG" height="514" width="1330">
      </div>
      <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
      <div class="slide-item">
        <img src="descuento.PNG" height="514" width="1330">
      </div>
      <label for="slide-3" class="slide-control prev control-1"> <- </label>
      <label for="slide-2" class="slide-control next control-1"> -> </label>
      <label for="slide-1" class="slide-control prev control-2"> <- </label>
      <label for="slide-3" class="slide-control next control-2"> -> </label>
      <label for="slide-2" class="slide-control prev control-3"> <- </label>
      <label for="slide-1" class="slide-control next control-3"> -> </label>
      <ol class="slide-indicador">
        <li>
          <label for="slide-1" class="slide-circulo">°</label>
        </li>
        <li>
          <label for="slide-2" class="slide-circulo">°</label>
        </li>
        <li>
          <label for="slide-3" class="slide-circulo">°</label>
        </li>
      </ol>
    </div>
  </div> </a>
  <br>  <br>

<h2> Populares en películas de terror </h2>
<hr/>
<table >
  <tr>
    <td> <img src="ruega.JPG" height="327" width="266"> </td>
    <td> <img src="conjuro.JPG" height="327" width="266"> </td>
    <td> <img src="scream.gif" alt="Funny image" height="327" width="266"> </td>
    <td> <img src="resplandor.JPG" height="327" width="266"> </td>
    <td> <img src="eso.JPG" height="327" width="266"> </td>
  </tr>
  </table>

<br> </br>
<h2> Populares en Series </h2>
<hr/>
<table >
  <tr>
    <td> <img src="loki.PNG" height="327" width="266"> </td>
    <td> <img src="lm.JPG" height="327" width="266"> </td>
    <td> <img src="fondo2.gif" alt="Funny image" height="327" width="266"> </td>
    <td> <img src="witch.JPG" height="327" width="266"> </td>
    <td> <img src="rym.JPG" height="327" width="266"> </td>


</nav>
</div>
</table>

<br> </br>
<footer>

   <div class="container-footer-all">

        <div class="container-body">

            <div class="colum1">
                <h1>Mas informacion de la compañia</h1>

                <p>Esta es una página de ventas de películas y series,
                  junto con una variedad de novedades y artículos coleccionables
                  que se caracterízan por su relacion en precio-calidad.</p>

            </div>

            <div class="colum2">

                <h1>Redes Sociales</h1>

                <div class="row">
                  <a href="https://www.facebook.com/MediaPlus-102290065462328">  <img src="facebook.png"> </a>
                    <label>Siguenos en Facebook</label>
                </div>
                <div class="row">
                <a href="https://twitter.com/?lang=es">  <img src="twitter.png"> </a>
                    <label>Siguenos en Twitter</label>
                </div>
                <div class="row">
                  <a href="https://www.instagram.com/?hl=es-la">  <img src="instagram.png"> </a>
                    <label>Siguenos en Instagram</label>
                </div>




            </div>

            <div class="colum3">

                <h1>Informacion Contactos</h1>

                <div class="row2">
                    <img src="house.png">
                    <label>La Piedad Cabadas
                    Colonia Santa Ana,
                    Y Municipio de Numarán
                    </label>
                </div>

                <div class="row2">
                    <img src="smartphone.png">
                    <label>352-107-0730</label>
                </div>

                <div class="row2">
                    <img src="contact.png">
                     <label>mediaplusoficial@gmail.com</label>
                </div>

            </div>

        </div>

    </div>

    <div class="container-footer">
           <div class="footer">
                <div class="copyright">
                    © 2021 Todos los Derechos Reservados |
                </div>

                <div class="information">
                    <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                </div>
            </div>

        </div>

</footer>



</body>
</html>
