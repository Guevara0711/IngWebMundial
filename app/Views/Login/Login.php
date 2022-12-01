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

		$sql_rol = "SELECT rol_id FROM users WHERE username = '$myusername' and password = '$mypassword'";
		$rol_row = mysqli_query($link, $sql_rol) or die (mysqli_error($link));
		$rol_sesion = mysqli_fetch_assoc($rol_row);
		$_SESSION['rol_user'] = $rol_sesion;

    
            $funcion = new Usuarios();
            $funcion->login_usuario($count);

}

$username = "";
$nombre   = "";
$apellido = "";
$password = "";
$email   = "";
$error = "";

if (isset($_POST['reg_user'])){

    $username =  mysqli_real_escape_string($link,$_POST['username']);
    $password = mysqli_real_escape_string($link,$_POST['password']); 
    $nombre = mysqli_real_escape_string($link,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($link,$_POST['apellido']);   
    $email = mysqli_real_escape_string($link,$_POST['email']);
	
    if (!preg_match('/^[a-zA-Z0-9\.]*$/', $username)){
        $_SESSION['error'] = "Error en caracteres para nombre de usuario, solo puede usar letras, numeros y guiones";
        header('location: /error.php');

    }elseif(!preg_match('/^[a-zA-Z\.]*$/', $nombre)){
        $_SESSION['error'] = "Error en caracteres para Nombre, usar unicamente valores de A-z"; 
        header('location: /error.php');

    }elseif(!preg_match('/^[a-zA-Z\.]*$/', $apellido)){
        $_SESSION['error'] = "Error en caracteres para Apellido, usar unicamente valores de A-z"; 
        header('location: /error.php');

    }else{
        $funcion = new Usuarios();
        $funcion->registrarUser($username,$password,$nombre,$apellido,$email); 

    }
}


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php 
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>

<head>
	<link href="<?php $root;?>/Design/CSS/SignStyle.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login/SignUp</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<div class="contenedor-global" id="container">
	<div class="contenedor-form contenedor-signup">
		<form method="post" action="Login.php">
			<h1>¡Regístrate!</h1>
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre" />
			<input type="text" name="apellido" value="<?php echo $apellido; ?>" placeholder="Apellido" />
			<input type="text" name="username" require value="<?php echo $username; ?>" placeholder="Usuario" />
			<input type="email" name="email" require value="<?php echo $email; ?>" placeholder="Correo" />
			<input type="password" name="password" require value="<?php echo $password; ?>" placeholder="Contraseña" />
			<button class="btn" type="submit" name="reg_user">Registrarse</button>
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