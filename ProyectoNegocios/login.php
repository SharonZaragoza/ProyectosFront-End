<?php
 session_start();//INICIAMOS NUESTRA SESION
include("conexion.php");


if (isset($_REQUEST['submit'])) {

        //ADQUIRIMOS NUESTRAS VARIABLES DE NUESTRO FORMULARIO POR METODO POST
	$correo = $_POST['correo'];
	$clave = $_POST['clave'];

        //HACEMOS UNA CONSULTA PARA SELECCIONAR A NUESTRO USUARIO MEDIANTE LOS PARAMETROS DE SU NOMBRE Y CLAVE
	$consulta = "SELECT COUNT(*) as cuenta FROM registros WHERE correo='$correo' and clave='$clave' ";
    $ejecutar = mysqli_query($conexion, $consulta);

        //EJECUTAMOS NUESTRA CONSULTA PARA EXTRAER LA INFROMACU]ION A TRAVEZ DE $ROW
    $row = mysqli_fetch_array($ejecutar) or die(mysql_error($conexion));

	if ($row['cuenta'] == 1) {


        //CREAMOS NUESTRA VARIABLE DE SESION PARA COMPARTIRLA ATRAVEZ DE LAS PAGINA EN ESTE CASO SERA CORREO
        $_SESSION['username'] = $correo;

        //SI EL USUARIO EXISTE ENTONCES REEDIRECCIONAME A PERFIL
    echo '<script>window.location="inicio.php"</script>';

	}else{

	    //SI NO EXISTE ENTONCES REDIRECCIONAME NUEVAMENTE AL LOGIN
        echo '<script>window.location="biblioteca.php"</script>';
        echo "ESTE USUARIO NO EXISTE...";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<!--estilos css -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
<link href="estilo-formulario.css" rel="stylesheet">

</head>
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
    </tr>


  </table>
</blockquote>


<div class="fixed-separation">&nbsp;</div>
<div class="tabs"></div>
<hr/>
<div class="back" >
<nav><center>
  <a href="peliculas.php"> Peliculas</a></font>
  <a href="series.php">  Series</a> </font>
  <a href="coleccionables.php"> Coleccionables</a> </font>
  <a href="novedades.php"> Novedades</a> </font>
  <a href="nosotros.html"> Acerca de Nosotros</a> </font>
</center>
<hr/>


<div id="wrapper">


	<form name="login-form" class="login-form" action="login.php" method="POST">

    <div class="header">
    <h1>Inicio de Sesión</h1>
<span>En caso de no tener una cuenta favor de registrarse en el apartado "Registro"</span>
</div>
<div class="content">
	<input name="correo" type="text" class="input username" required placeholder="Ingresa tu correo" />
  <div class="user-icon"></div>
	<input name="clave" type="password"  class="input password" required placeholder="Ingresa tu contraseña" />
  <div class="pass-icon"> </div>
</div>

<div class="footer">
  <input type="submit" name="submit" value="Inicia Sesion"  class="button" />
<p>  <a href="registro.php" >   Registro  </a></p>
</div>
	</form>
</div>
<div class="gradient"> </div>
</body>
</html>
