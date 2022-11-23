<?php
session_start();
include("../../config.php"); //conexion a la bdd

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form 
	$myusername = mysqli_real_escape_string($link, $_POST['usuario']);
	$mypassword = mysqli_real_escape_string($link, $_POST['password']);

	$sql = "SELECT nombre FROM usuarios WHERE correo = '$myusername';";

	if (mysqli_query($link, $sql)) {
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($result);
		if (mysqli_num_rows($result) == 0) {
			$error = "Usuario o contraseña incorrectos. Por favor verifique sus datos e intente nuevamente";
			echo $error;
		} else {
			echo "Usuario o contraseña correctamente";
			$_SESSION['login_user'] = $myusername;
			header("Location:View/Equipos/Equipos.php");
		}
	} else {
		$error = "Usuario o contraseña incorrectos. Por favor verifique sus datos e intente nuevamente";
		echo $error;
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
			<form method="post">
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
				<button class="btn" type="submit" name="btn_ingresar">Iniciar Sesión</button>
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