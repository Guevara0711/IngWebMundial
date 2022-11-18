<?php
define('DB_SERVER', 'localhost:3000');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345612');
define('DB_NAME', 'IngWebMundial_db');

// Conectar a la bdd
$link = new mysqli("mysql", "root", "12345612", "IngWebMundial_db");
return $link;
 
// Revisar conexion
if($link === false){
    die("Error de conexión " . mysqli_connect_error());
}
?>