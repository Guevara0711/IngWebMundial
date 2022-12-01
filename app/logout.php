<?php
session_start();
 
// Quita todas las variables de sesion
$_SESSION = array();

session_unset();
 
// Elimina la sesion
session_destroy();
 
// Redirige a nuestra pagina principal
header("location: /Views/Login/Login.php");
exit;
?>