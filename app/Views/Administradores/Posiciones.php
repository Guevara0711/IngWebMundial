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
    <link href="<?php $root;?>/Design/CSS/PosicionStyle.css" rel="stylesheet" type="text/css" />
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
                    <li><a href="<?php $root;?>/Views/Administradores/Posiciones.php" class="seleccion">Posiciones</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Resultados.php">Resultados</a></li>
                    <li><a href="#clasificacion">Clasificación</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Favoritos.php">Favoritos</a></li>
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
    <div class="contenedor-titulo-fase-grupos">
        <span>Fase de Grupos</span>
    </div>
    <div class="contenedor-tabla-grupo-a">
        <table>
            <tr>
                <th>Grupo A</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Países Bajos</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Senegal</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Ecuador</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Catar</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
    </div>
    <div class="contenedor-tabla-grupo-b">
        <table>
            <tr>
                <th>Grupo B</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Inglaterra</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Estados Unidos</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Irán</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Gales</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
    </div>
    <div class="contenedor-tabla-grupo-c">
        <table>
            <tr>
                <th>Grupo C</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Polonia</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Argentina</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Arabia Saudita</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">México</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
    </div>
    <div class="contenedor-tabla-grupo-d">
        <table>
            <tr>
                <th>Grupo D</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Francia</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Australia</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Túnez</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Dinamarca</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
    </div>
    <div class="contenedor-tabla-grupo-e">
        <table>
            <tr>
                <th>Grupo E</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">España</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Japón</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Costa Rica</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Alemania</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
    </div>
    <div class="contenedor-tabla-grupo-f">
        <table>
            <tr>
                <th>Grupo F</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Croacia</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Marruecos</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Bélgica</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Canadá</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
    </div>
    <div class="contenedor-tabla-grupo-g">
        <table>
            <tr>
                <th>Grupo G</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Brasil</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Suiza</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Camerún</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Serbia</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
    </div>
    <div class="contenedor-tabla-grupo-h">
        <table>
            <tr>
                <th>Grupo H</th>
            </tr>
            <tr class="fila-encabezado">
                <td class="columna-equipo">Equipo</td>
                <td class="columna-numeros">PJ</td>
                <td class="columna-numeros">G</td>
                <td class="columna-numeros">E</td>
                <td class="columna-numeros">P</td>
                <td class="columna-numeros">GF</td>
                <td class="columna-numeros">GC</td>
                <td class="columna-numeros">DG</td>
                <td class="columna-numeros">Pts</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Portugal</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Ghana</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Corea del Sur</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
            <tr class="fila-normal">
                <td class="columna-equipo">Uruguay</td>
                <td class="columna-numeros">3</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
                <td class="columna-numeros">0</td>
            </tr>
        </table>
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