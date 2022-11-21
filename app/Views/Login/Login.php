<?php
require_once "/config.php"; //conexion a la bdd
session_start();
$error= "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form 
	$myusername = mysqli_real_escape_string($link,$_POST['usuario']);
	$mypassword = mysqli_real_escape_string($link,$_POST['password']); 
	$_SESSION['usuario'] = $myusername;


	$sql = "SELECT id_usuario FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
	$result = mysqli_query($link,$sql) or die(mysqli_error($link));
	$row = mysqli_fetch_assoc($result);
	$_SESSION['row'] = $row;
	$count = mysqli_num_rows($result);

	$sql_nombre = "SELECT nombre FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
	$nombre_row = mysqli_query($link,$sql_nombre) or die(mysqli_error($link));
	$nombre_sesion = mysqli_fetch_assoc($nombre_row);
	$_SESSION['nombre'] = $nombre_sesion;

	$sql_correo = "SELECT correo FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
	$correo_row = mysqli_query($link,$sql_correo) or die(mysqli_error($link));
	$correo_sesion = mysqli_fetch_assoc($correo_row);
	$_SESSION['correo'] = $correo_sesion;

	$sql_contrasena = "SELECT contrasena FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
	$contrasena_row = mysqli_query($link,$sql_contrasena) or die(mysqli_error($link));
	$contrasena_sesion = mysqli_fetch_assoc($contrasena_row);
	$_SESSION['contrasena'] = $contrasena_sesion;

	$sql_rol = "SELECT rol FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
	$rol_row = mysqli_query($link,$sql_rol) or die(mysqli_error($link));
	$rol_sesion = mysqli_fetch_assoc($rol_row);
	$_SESSION['rol'] = $rol_sesion;

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1) {
		$_SESSION['login_user'] = $myusername;
		header("location: welcome.php");
	}else {
		$error = "Your Login Name or Password is invalid";
	}


	$function = new Usuarios();
	$function->login_usuario($count);

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
			<input type="email" placeholder="Correo" class="input" name="usuario" />
			<input type="password" placeholder="Contraseña" class="input" name="password" />
			<a href="/index.php">¿Olvidaste tu contraseña?</a>
			<button class="btn" type="submit" name="btn_ingresar" >Iniciar Sesión</button>
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