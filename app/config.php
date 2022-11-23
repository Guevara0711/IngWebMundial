<?php
define('DB_SERVER', 'tcp:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345612');
define('DB_DATABASE', 'IngWebMundial_db');

// Conectar a la bdd
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno()) {
  // If there is an error with the connection, stop the script and display the error.
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
