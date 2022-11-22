<?php
#incluye el archivo de conexiones config.php 
require '../../config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form 

	$myusername = mysqli_real_escape_string($link,$_POST['correo']);
	$mypassword = mysqli_real_escape_string($link,$_POST['contrasena']);

	$sql = "SELECT id_usuario FROM usuarios WHERE correo = '$myusername' and contrasena = '$mypassword'";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];

	$count = mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row

	if ($count == 1) {
		session_register("myusername");
		$_SESSION['btn_ingresar'] = "true";
		header("location: ../../index.php");
	} else {
		$error = "Your Login Name or Password is invalid";
	}
	
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