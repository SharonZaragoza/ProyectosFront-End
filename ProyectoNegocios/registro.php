<?php

include("conexion.php"); //incluimos nuestro arhivo de conexion
	if (isset($_REQUEST['Registrarse'])) { //esto implementarlo con la tabla de ventas
    //variables recibidas de nuestro formulario por metodo POST
	$nombre = $_POST['nombre']; //idLibro
	$correo = $_POST['correo']; //idCliente
	$clave = $_POST['clave'];
	$confirmarclave = $_POST['confirmarclave'];


    if($_POST['clave'] == $_POST['confirmarclave']){//SOLO SI LAS CLAVE Y CONFCLV SON IGUALES


    	//CONSULTA HACIA NUESTRA BD
         $consulta = "INSERT INTO registros(nombre, correo, clave) VALUES( '$nombre', '$correo', '$clave')";
        //VAIRABLE PARA EJECUTAR NUESTRA CONSULTA Y  NUESTRA CONEXION
	     $ejecutar = mysqli_query($conexion, $consulta);

			 	echo '<script>window.location="login.php"</script>';


	if ($ejecutar) {//IF 2
		//SI LOS PARAMETROS SON CORRECTOS ABRE UNA NUEVA VENTANA..

	echo '<script>window.location="inicio.php"</script>';


	}//FIN DEL IF 2

        }
  }//FIN DE Registrarse
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuarios</title>


<!--Link de los esilos...-->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
<link href="estilo-formulario2.css" rel="stylesheet">


</head>
<body style="background-color:#F7F7FF" >
	<br> </br>
	 <blockquote> <a href="inicio.php"> <img src="logo.PNG" height="75" width="195"> </a>
		 <hr/>
	<div id="wrapper">
		<form name="login-form" class="login-form" action="registro.php" method="POST">
      <div class="header">
    	<h1>Registro</h1>
			<span> Favor de completar los datos correspondientes para su registro </span>
		</div>
		<div class="content">
	<input type="text" name="nombre" class="input username" required placeholder="Ingresa tu nombre" />
	 <div class="user-icon"></div>
	<input type="text" name="correo" class="input username" required placeholder="Ingresa tu correo" />
	<div class="user-icon"></div>
	<input type="password" name="clave" class="input password" required placeholder="Ingresa una contraseña" />
	<div class="pass-icon"></div>
	<input type="password" name="confirmarclave" class="input password" required placeholder="Repetir Contraseña" />
	<div class="pass-icon"></div>
</div>
<div class="footer">
	<input type="submit" name="Registrarse" value="Registrarse" class="button" />
</div>

	</form>
</div>
<div class="gradient"> </div>
<br> </br>
<br> </br>
<br> </br>

<div class="row">
  <div class="col left">
  <h1>Conéctacte con</h1>
    <p><small>
      Tambien puedes acceder a nuestro sitio mediante tus redes sociales.
    </small></p>
  </div>
  <div class="col right">
  <a href="https://www.facebook.com/"><button class="btn facebook" data-provider="facebook"><i></i><span>Facebook</span></button></a>
<a href="https://twitter.com/?lang=es">  <button class="btn twitter" data-provider="twitter"><i></i><span>Twitter</span></button></a>
<a href="https://mail.google.com/mail/u/0/">  <button class="btn plus" data-provider="google plus"><span class="i"><i></i></span><span>Google Plus</span></button></a>
  </div>
</div>

</body>
</html>
