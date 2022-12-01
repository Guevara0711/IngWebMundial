<?php session_start()?>
<?php
if (!isset($_SESSION['nombre_user']))
{                     
    session_unset();
    session_destroy();
    header("Location: /index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php $root;?>/Design/CSS/HomeStyle1.css" rel="stylesheet" type="text/css" />
    <link href="<?php $root;?>/Design/CSS/NosotroStyle.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fifa World Cup 2022</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="contenedor-menu">
                <div class="contenedor-imagen-mundial">
                    <a href="<?php $root;?>/Views/Usuarios/indexusuario.php"><img src="<?php $root;?>/Design/Image\qatar2022.png" alt=""></a>
                </div>
                <ul class="menu">
                    <li><a href="<?php $root;?>/Views/Usuarios/indexusuario.php" class="seleccion">Inicio</a></li>
                    <li><a href="<?php $root;?>/Views/Usuarios/Equipos.php">Equipos</a></li>
                    <li><a href="<?php $root;?>/Views/Usuarios/Posiciones.php">Posiciones</a></li>
                    <li><a href="<?php $root;?>/Views/Usuarios/Resultados.php">Resultados</a></li>
                    <li><a href="#clasificacion">Clasificación</a></li>
                    <li><a href="<?php $root;?>/Views/Usuarios/Favoritos.php">Favoritos</a></li>
                </ul>
                <div class="contenedor-usuario">
                    <div class="contenedor-iniciarsesion">
                        <a href="" class="iniciar-sesion">Bienvenido, <?php echo implode(', ', $_SESSION['nombre_user']); echo ' '; echo implode(', ', $_SESSION['apellido_user']);?></a>
                    </div>
                    <div class="contenedor-iniciarsesion">
                        <button class="cerrar-sesion" name="CerrarSesion"><a href="<?php $root;?>/logout.php">Cerrar Sesión</a></button>
                    </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="contenedor-titulo-nosotros">
        <span>Quiénes somos</span>
    </div>
    <div class="contenedor-integrantes-general">
        <div class="integrante">
            <img src="<?php $root;?>/Design/Image\samuel1.jpeg" alt="">
            <div>
                <span class="titulo-integrante">Samuel Núñez</span>
                <span class="parrafo-integrante">Encargado mayoritariamente del desarrollo backend, creación de tablas en la base de datos
                    y un poco de desarrollo frontend, principal encargado de la conexión de la página web a la 
                    base de datos.
                </span>
            </div>
        </div>
        <div class="integrante">
            <img src="<?php $root;?>/Design/Image\robertito.jpeg" alt="">
            <div>
                <span class="titulo-integrante">Roberto Cortes</span>
                <span class="parrafo-integrante">Encargado en su mayoría del desarrollo frontend, aplicación de un diseño intuitivo y
                    agradable tanto para el visitante como para el administrador, desarrollo backend y parte
                    de la creación de ciertas tablas en la base de datos.
                </span>
            </div>
        </div>
        <div class="integrante">
            <img src="<?php $root;?>/Design/Image\jens1.jpeg" alt="">
            <div>
                <span class="titulo-integrante">Jens Hoffmann</span>
                <span class="parrafo-integrante">Encargado en gran parte al desarrollo backend, responsable de una pequeña parte de 
                    desarrollo frontend, y apoyo junto con Samuel Núñez en la conexión de la base de datos.
                </span>
            </div>
        </div>
        <div class="integrante">
            <img src="<?php $root;?>/Design/Image\paola1.jpeg" alt="">
            <div>
                <span class="titulo-integrante">Paola Solís</span>
                <span class="parrafo-integrante">Encargada de la creación de la documentación del Proyecto, como lo es, la confección
                    del Diagrama de Modelado Web (UWE) para proporcionar la guía de las funcionalidades que
                    posee el sitio web.
                </span>
            </div>
        </div>
        <div class="integrante">
            <img src="<?php $root;?>/Design/Image\mariam1.jpeg" alt="">
            <div>
                <span class="titulo-integrante">Mariam Mena</span>
                <span class="parrafo-integrante">Encargada de la confección de la otra parte de la documentación del Proyecto, 
                    como lo es la Arquitectura de la Información del sitio web.
                </span>
            </div>
        </div>
    </div>
    <div class="contenedor-hacemos-general">
        <div class="contenedor-titulo-hacemos">
            <span>Qué hacemos</span>
        </div>
        <div class="contenedor-parrafo-hacemos">
            <span>Este proyecto ha sido desarrollado en época del Mundial de Fútbol 2022 con la finalidad de proporcionar
                a los usuarios que visiten la página web, una forma fácil, organizada y sencilla de obtener un control
                sobre los partidos, escoger a sus equipos favoritos, entre otras funcionalidades, todo esto desde un solo  lugar
            </span>
        </div>
    </div>
    <footer class="footer">
    <div class="footer__addr">
      <img class="footer__logo" src="https://www.pngplay.com/wp-content/uploads/10/FIFA-Logo-Transparent-Images.png" alt="">

      <h2>Dirección</h2>

      <address>
        Universidad Tec. de Panamá, Panamá, Panamá
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Cuenta</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Administrar Cuenta</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Explorar</h2>

        <ul class="nav__ul">
          <li>
            <a href="<?php $root;?>/Views/Usuarios/Nosotros.php">Sobre Nosotros</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Apoyo</h2>

        <ul class="nav__ul">
          <li>
            <a href="<?php $root;?>/Views/Usuarios/Contacto.php">Contacto</a>
          </li>
        </ul>
      </li>
    </ul>
    </footer>