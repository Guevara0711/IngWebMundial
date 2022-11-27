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
}

