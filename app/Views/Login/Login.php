<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
session_start();
$error= "";
require "$root/funciones.php";
require "$root/config.php";

if(isset($_POST['ingresar'])){

    require "$root/config.php"; //conexion a la bdd
        //revisa las variables enviadas desde el form
        
        $myusername = mysqli_real_escape_string($link,$_POST['user']);
        $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
        $_SESSION['usuario'] = $myusername;
    

        
        //revisa el id del usuario que se intenta loggear
        $sql = "SELECT id_users FROM users WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($link,$sql) or die (mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        $_SESSION['row'] = $row;
        $count = mysqli_num_rows($result);
    
        //creando variables de sesion para la duracion del proceso
        $sql_nombre = "SELECT nombre FROM users WHERE username = '$myusername' and password = '$mypassword'";
        $nombre_row = mysqli_query($link, $sql_nombre) or die (mysqli_error($link));
        $nombre_sesion = mysqli_fetch_assoc($nombre_row);
        $_SESSION['nombre_user'] = $nombre_sesion;
    
        $sql_apellido = "SELECT apellido FROM users WHERE username = '$myusername' and password = '$mypassword'";
        $apellido_row = mysqli_query($link, $sql_apellido) or die (mysqli_error($link));
        $apellido_sesion = mysqli_fetch_assoc($apellido_row);
        $_SESSION['apellido_user'] = $apellido_sesion;  
            
        $sql_correo = "SELECT correo FROM users WHERE username = '$myusername' and password = '$mypassword'";
        $correo_row = mysqli_query($link, $sql_correo) or die (mysqli_error($link));
        $correo_sesion = mysqli_fetch_assoc($correo_row);
        $_SESSION['correo_user'] = $correo_sesion;
        
        $sql_telefono = "SELECT telefono FROM users WHERE username = '$myusername' and password = '$mypassword'";
        $telefono_row = mysqli_query($link, $sql_telefono) or die (mysqli_error($link));
        $telefono_sesion = mysqli_fetch_assoc($telefono_row);
        $_SESSION['telefono_user'] = $telefono_sesion;
    
            $funcion = new Usuarios();
            $funcion->login_usuario($count);

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<link href="/Design/CSS/SignStyle.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login/SignUp</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<div class="contenedor-global" id="container">
	<div class="contenedor-form contenedor-signup">
		<form action="#">
			<h1>¡Regístrate!</h1>
			<input type="text" placeholder="Nombre" />
			<input type="email" placeholder="Correo" />
			<input type="password" placeholder="Contraseña" />
			<button>Registrarse</button>
		</form>
	</div>
	<div class="contenedor-form contenedor-login">
		<form method="post" action="">
			<h1>Iniciar Sesión</h1>
			<input type="text" placeholder="Usuario" class="input" name="user" />
			<input type="password" placeholder="Contraseña" class="input" name="password" />
			<a href="/index.php">¿Olvidaste tu contraseña?</a>
			<button class="btn" type="submit" name="ingresar">Iniciar Sesión</button>
		</form>
	</div>
	<div class="contenedor-superposicion">
		<div class="superposicion">
			<div class="panel-superpuesto superposicion-izquierda">
				<h1>¡Hola de Nuevo!</h1>
				<p>Para mantenerte conectado, necesitas ingresar tus datos de inicio de sesión</p>
				<button class="fantasma" id="signIn">Iniciar Sesión</button>
			</div>
			<div class="panel-superpuesto superposicion-derecha">
				<h1>¡Bienvenido!</h1>
				<p>¿Aún no tienes cuenta? No te preocupes, crearla es rápido y sencillo</p>
				<button class="fantasma" id="signUp">Registrarse</button>
			</div>
		</div>
	</div>

	<script src="/Design/JS\SignJS.js" charset="utf-8"></script>
</body>

</html>