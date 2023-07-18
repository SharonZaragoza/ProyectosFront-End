<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Biblioteca</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <!--
        Este ejemplo acompaña al post https://www.campusmvp.es/recursos/post/como-hacer-un-slider-sencillo-con-html-y-css-sin-javascript.aspx
        del blog decampusMVP
    -->

    <style>
        ul, li {
        padding: 0;
        margin: 0;
        list-style: none inside;
        }

        ul.slider {
        position: relative;
        }

        ul.slider li {
        opacity: 0;
        transition: opacity .5s;
        position: absolute;
        left: 0px;
        top: 0px;
        margin: 50px;
        padding: 50px;
        border: 2px solid red;
        background: #fff;
        }

        ul.slider li:first-child {
            opacity: 1;
        }

        ul.slider li:target {
            opacity: 1;
        }

        nav {
        position: relative;
        top: 200px;
        left: 50px;
        }


        /*
           A partir de aquí el CSS es puro diseño visual para hacer una versión más vistosa.
           Puedes comentarlo si te resulta más fácil estudiar el ejemplo en su versión más sencilla

        */


        body, html {
        padding: 0;
        margin: 0;
        width: 100vw;
        height: 100vh;
        overflow:hidden;
        }

        ul, li {
        box-sizing: border-box;
        }

        ul.slider {
        padding: 30px;
        }

        ul.slider li {
        width: 100vw;
        height: 100vh;
        margin: 0;
        padding: 0;
        border: 0;
        background-color: gray;
        opacity: 0;
        transition: opacity .5s;
        padding-top: 30vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        font-size: calc( 1.5rem + 1vw );
        text-align: center;
        }

        #slide1 {
        background-color: #00324b;
        color: #fff;
        }

        #slide2 {
        background-color: #65bce8;
        color: #00324b;
        }

        #slide3 {
        background-color: #f90;
        color: #00324b;
        }

        #slide4 {
        background-color: #00324b;
        color: #65bce8;
        }

        #slide5 {
        background-color: #65bce8;
        color: #00324b;
        }

        nav {
        width: 100vw;
        position: absolute;
        top: auto;
        right: 0;
        bottom: 0;
        left: 0;
        background: #f1f2f3;
        }

        nav ul {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        }

        nav ul li {
        display: flex;
        flex-grow: 1;
        flex-wrap: wrap;
        box-sizing: border:box;
        }

        nav a {
        font-size: calc( 1.2rem + 1vw );
        text-decoration: none;
        font-weight: bold;
        color: #00324b;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.8;
        flex-grow: 1;
        text-align: center;
        border-top: 5px solid #00324b;
        border-right: 1px solid #00324b;
        flex-wrap: wrap;
        position: relative;
        }

        nav li:last-child a {
        border-right: 0;
        }

        nav a:hover {
        background-color: #00324b;
        color: #fff;
        border-top-color: #65bce8;
        }

        nav a:active {
        border-top-color: #f90;
        background: #f90;
        color: #00324b;
        }
    </style>
</head>
<body>
    <ul class="slider">
        <li id="slide1">Suspenso</li>
        <li id="slide2">Misterio</li>
        <li id="slide3">Fantasia</li>
        <li id="slide4">Autoayuda</li>
        <li id="slide5">Aventuras</li>
				<li id="slide5">Ciencia Ficcion</li>
				<li id="slide5">Terror</li>
				<li id="slide5">Romance</li>

    </ul>
    <nav>
        <ul class="menu">
            <li><a href="suspenso.php">Suspenso</a></li>
            <li><a href="misterio.php">Misterio</a></li>
            <li><a href="fantasia.php">Fantasia</a></li>
            <li><a href="autoayuda.php">Autoayuda</a></li>
            <li><a href="aventura.php">Aventuras</a></li>
						<li><a href="ciencia_ficcion.php">Ciencia Ficcion</a></li>
						<li><a href="terror.php">Terror</a></li>
						<li><a href="romance.php">Romance</a></li>

        </ul>
    </nav>
</body>
</html>
