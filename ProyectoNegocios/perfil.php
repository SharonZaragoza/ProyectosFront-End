<?php
session_start();//INICIAMOS SESION

$correo = $_SESSION['username'];//INVOCAMOS NUESTRA VARIABLE DE SESION CREADA ANTERIORMENTE
//ESTO CON LA FINALIDAD DE HACER CONSULTAS A NUESTRA BASE DE DATOS CON EL PARAMETRO CORRESPONDIENTE A CADA USUARIO

//INCLUIMOS NUESTRA CONEXION..
include("conexion.php");

            $query = "SELECT *FROM registros WHERE correo='$correo' ";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();



if (isset($_REQUEST['salir'])) {

unset($_SESSION['username']);
		echo '<script>window.location="login.php"</script>';

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi Perfil</title>
<!-- Estilos -->

        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo/estilos_perfiles.css">

</head>
<body>
    <div align="center">
          <table border="3">

             <tr>

             <td>Id de usuario:<?php echo $row['id'];?></td>

             <td>¡Hola <?php echo $row['nombre'];?>!</td>

              <td><?php echo $row['correo']; ?></td>

              <td><a href="config_perfil.php">configuracion</a></td>


              <td>
                  <form action="perfil.php" method="POST">
                      <input type="submit" name="salir" value="cerrar sesion">
                  </form>
                   </td>
             </tr>
           </table>
           <br>
           <a href="biblioteca.php"> Ir a la Biblioteca </a>
    </div>




</body>


</html>
