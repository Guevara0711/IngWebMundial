<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
session_start();
$error = "";
require "$root/funciones.php";
require "$root/config.php";


if (isset($_POST['Ingresar'])) {

	require "$root/config.php";
	$myusername = mysqli_real_escape_string($db, $_POST['user']);
	$mypassword = mysqli_real_escape_string($db, $_POST['password']);
	$_SESSION['correo'] = $myusername;

	$sql = "SELECT id_users FROM usuarios WHERE correo = '$myusername' and password = '$mypassword'";
	$result = mysqli_query($link, $sql) or die(mysqli_error($link));
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$_SESSION['row'] = $row;
	$count = mysqli_num_rows($result);

	$sql_nombre = "SELECT nombre FROM usuarios WHERE correo = '$myusername' and password = '$mypassword'";
	$nombre_row = mysqli_query($link, $sql_nombre) or die(mysqli_error($link));
	$nombre_sesion = mysqli_fetch_assoc($nombre_row);
	$_SESSION['nombre'] = $nombre_sesion['nombre'];

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
			<form action="#">
				<h1>Iniciar Sesión</h1>
				<input type="email" placeholder="Correo" />
				<input type="password" placeholder="Contraseña" />
				<a href="/index.php">¿Olvidaste tu contraseña?</a>
				<button>Iniciar Sesión</button>
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
	</div>

	<script src="/Design/JS\SignJS.js" charset="utf-8"></script>
</body>

</html>