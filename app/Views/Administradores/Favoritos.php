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
    <link href="<?php $root;?>/Design/CSS/FavStyle.css" rel="stylesheet" type="text/css" />
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
                    <a href="<?php $root;?>/Views/Administradores/indexadmin.php"><img src="<?php $root;?>/Design/Image\qatar2022.png" alt=""></a>
                </div>
                <ul class="menu">
                    <li><a href="<?php $root;?>/Views/Administradores/indexadmin.php">Inicio</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Equipos.php">Equipos</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Posiciones.php">Posiciones</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Resultados.php">Resultados</a></li>
                    <li><a href="#clasificacion">Clasificación</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Favoritos.php" class="seleccion">Favoritos</a></li>
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
        </nav>
    </header>
    <div class="contenedor-texto-favoritos">
        <span>Favoritos</span>
    </div>
    <div class="contenedor-general-equipos">
      <div class="contenedor-equipo-favorito">
          <div class="contenedor-bandera-nombre">
              <img src="/Design/Image\banderaespaña.webp" alt="">
              <span>España</span>
          </div>
          <hr class="separador-bandera-partidos">
          <div class="contenedor-partidos-equipo-fav">
              <div class="partido-independiente">
                  <span>España</span>
                  <span>7</span>
                  <span>-</span>
                  <span>0</span>
                  <span>Costa Rica</span>
              </div>
              <div class="partido-independiente">
                  <span>España</span>
                  <span>2</span>
                  <span>-</span>
                  <span>2</span>
                  <span>Alemania</span>
              </div>
              <div class="partido-independiente">
                  <span>España</span>
                  <span>0</span>
                  <span>-</span>
                  <span>0</span>
                  <span>Japón</span>
              </div>
          </div>
          <hr class="separador-partidos-eliminar">
          <div class="contenedor-boton-eliminar">
              <a href=""><button>Eliminar</button></a>
          </div>
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
            <a href="<?php $root;?>/Views/Administradores/Nosotros.php">Sobre Nosotros</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Apoyo</h2>

        <ul class="nav__ul">
          <li>
            <a href="<?php $root;?>/Views/Administradores/Contacto.php">Contacto</a>
          </li>
        </ul>
      </li>
    </ul>
    </footer>
</body>
</html>