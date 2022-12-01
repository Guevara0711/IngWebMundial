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

<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
session_start();
$error= "";
require "$root/funciones.php";
require "$root/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php $root;?>/Design/CSS/HomeStyle1.css" rel="stylesheet" type="text/css" />
    <link href="<?php $root;?>/Design/CSS/ResultStyle.css" rel="stylesheet" type="text/css" />
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
                    <a href="<?php $root;?>/Views/Administradores/indexadmin.php"><img src="<?php $root;?>/Design/Image/qatar2022.png" alt=""></a>
                </div>
                <ul class="menu">
                    <li><a href="<?php $root;?>/Views/Administradores/indexadmin.php">Inicio</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Equipos.php">Equipos</a></li>
                    <li><a href="#partidos">Partidos</a></li>
                    <li><a href="<?php $root;?>/Views/Administradores/Resultados.php" class="seleccion">Resultados</a></li>
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
<form action="<?php $root;?>/Views/Administradores/actualizapartido.php" method="POST">
    <input type="submit" name="actualizar" value="Actualizar Resultados"/>
</form>
<form action="<?php $root;?>/Views/Administradores/actualizapartido.php" method="POST">
    <input type="submit" name="actualizar" value="Actualizar Resultados"/>
    <table border="0" cellspacing="0" cellpadding="2">
        <thead>
            <tr>
                <th style="display:none">idPartido</th>
                <th>Equipo 1</th>
                <th>Marcador 1</th>
                <th>Equipo 2</th>
                <th>Marcador 2</th>
                <th>Fecha</th>
                <th>Finalizado</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT 
                eq1.NombreEquipo as equipo1, 
                eq2.NombreEquipo as equipo2, 
                resultados.idPartido as idPartido,
                resultados.idEquipo1 as idEquipo1, 
                resultados.idEquipo2 as idEquipo2, 
                resultados.golesEquipo1 as golesEquipo1,
                resultados.golesEquipo2 as golesEquipo2, 
                resultados.fecha as fecha,
                resultados.Finalizado as finalizado
                FROM resultados 
                LEFT JOIN equipos as eq1 ON eq1.idEquipos = resultados.idEquipo1
                LEFT JOIN equipos as eq2 ON eq2.idEquipos = resultados.idEquipo2";
                $results_resultados = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($results_resultados)){
                    $idpartido=$row['idPartido'];
                    $equipo1=$row['equipo1'];
                    $equipo2=$row['equipo2'];
                    $idequipo1=$row['idEquipo1'];
                    $idequipo2=$row['idEquipo2'];
                    $golesEquipo1=$row['golesEquipo1'];
                    $golesEquipo2=$row['golesEquipo2'];
                    $fecha = $row['fecha'];
                    $valor1 = $row['finalizado'];
                    if($valor1=="No"){$valor2="Si";
                    }else {$valor2="No";}
                    echo'<tr>
                            <td style="display:none;"><input type="text" name="idpartido[]" value="'.$idpartido.'" id="idpartido" ></td>
                            <td>'.$equipo1.'</td>
                            <td><input type="text" name="golesEquipo1[]" value="'.$golesEquipo1.'" id="golesEquipo1" ></td>
                            <td>'.$equipo2.'</td>
                            <td><input type="text" name="golesEquipo2[]" value="'.$golesEquipo2.'" id="golesEquipo1" ></td>
                            <td>'.$fecha.'</td>
                            <td><select name="finalizado[]">
                            <option>'.$valor1.'</option>
                            <option>'.$valor2.'</option></td>
                        </tr>';
                        
               }?>
        </tbody>
    </table>
</form>
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

