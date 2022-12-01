<?php
session_start();

class Usuarios{
    public function login_usuario($a){
        #si el rol_id es 1, es admin
        if($a == 1 && $_SESSION['rol_user']['rol_id'] == 1){
            header("location: /Views/Equipos/Equipos.php");
        }
        #si el rol_id es 2, es usuario
        elseif($a == 1 && $_SESSION['rol_user']['rol_id'] == 2){
            header("location: /index.php");
        }

        else{
            $_SESSION['error'] = "Usuario o contraseña incorrectos";
            header("location: /error.php");
        }
    }

    public function registrarUser($a,$b,$c,$d,$e){
        
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        require "$root/config.php";

        $user_check_query = "SELECT * FROM users WHERE username='$a'";
        $result = mysqli_query($link, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $a) {
            $_SESSION['error'] = "El usuario ya existe";
            header("location: /index.php");
        }else{
            $query = "INSERT INTO users (username, password, nombre, apellido, correo, rol_id) 
                      VALUES('$a', '$b', '$c', '$d', '$e', 2)";
            mysqli_query($link, $query);
            $_SESSION['error'] = "Usuario registrado";
            header("location:http://localhost:80/index.php");
        }
    }
}

