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
    <link rel="stylesheet" href="<?php $root;?>/Design/CSS/EquipoStyle.css" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fifa World Cup 2022</title>
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
                    <li><a href="<?php $root;?>/Views/Usuarios/indexusuario.php">Inicio</a></li>
                    <li><a href="<?php $root;?>/Views/Usuarios/Equipos.php" class="seleccion">Equipos</a></li>
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
        </nav>
    </header>
    <span>Grupo A</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderaqatar.webp" alt="">
            <span>Qatar</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderaecuador.jpg" alt="">
            <span>Ecuador</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderasenegal.png" alt="">
            <span>Senegal</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderaholanda.png" alt="">
            <span>Países Bajos</span>
        </a>
    </div>
    <span>Grupo B</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderainglaterra.webp" alt="">
            <span>Inglaterra</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderairan.webp" alt="">
            <span>Irán</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderausa.webp" alt="">
            <span>Estados Unidos</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderagales.jpg" alt="">
            <span>Gales</span>
        </a>
    </div>
    <span>Grupo C</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderaargentina.webp" alt="">
            <span>Argentina</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipoe.php">
            <img src="/Design/Image\banderaarabia.png" alt="">
            <span>Arabia Saudita</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderamexico.webp" alt="">
            <span>México</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderapolonia.jpg" alt="">
            <span>Polonia</span>
        </a>
    </div>
    <span>Grupo D</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderafrancia.webp" alt="">
            <span>Francia</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderaaustralia.jpg" alt="">
            <span>Australia</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderadinamarca.jpg" alt="">
            <span>Dinamarca</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderatunisia.png" alt="">
            <span>Túnez</span>
        </a>
    </div>
    <span>Grupo E</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderaespaña.webp" alt="">
            <span>España</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderacostarica.jpg" alt="">
            <span>Costa Rica</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipoe.php">
            <img src="/Design/Image\banderaalemania.webp" alt="">
            <span>Alemania</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderajapon.jpg" alt="">
            <span>Japón</span>
        </a>
    </div>
    <span>Grupo F</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderabelgica.jpeg" alt="">
            <span>Bélgica</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderacanada.jpg" alt="">
            <span>Canadá</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderamarruecos.png" alt="">
            <span>Marruecos</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderacroacia.png" alt="">
            <span>Croacia</span>
        </a>
    </div>
    <span>Grupo G</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderabrasil.webp" alt="">
            <span>Brasil</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderaserbia.png" alt="">
            <span>Serbia</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderasuiza.png" alt="">
            <span>Suiza</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="/Design/Image\banderacamerun.jpg" alt="">
            <span>Camerún</span>
        </a>
    </div>
    <span>Grupo H</span>
    <div class="contenedor-equipo">
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/1200px-Flag_of_Portugal.svg.png" alt="">
            <span>Portugal</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="https://static3.depositphotos.com/1003857/242/i/450/depositphotos_2428722-stock-photo-national-flag-ghana.jpg" alt="">
            <span>Ghana</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/945px-Flag_of_Uruguay.svg.png" alt="">
            <span>Uruguay</span>
        </a>
        <a href="<?php $root;?>/Views/Usuarios/PagEquipo.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_South_Korea.svg/200px-Flag_of_South_Korea.svg.png" alt="">
            <span>Corea del Sur</span>
        </a>
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
</body>
</html>