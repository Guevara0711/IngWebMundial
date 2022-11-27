<?php
session_start();

class Usuarios{
    public function login_usuario($a){
            
            //si algo salio en el query de sql, deja loggear a la persona
            if($a == 1) {
                //$success = TRUE;
                //return $success;
                header("location: /Views/Equipos/Equipos.php");
            }else {
                $success = FALSE;
                //return $success;
                $error = "*Cédula o contraseña incorrectos. Por favor verifique sus datos e intente nuevamente";
            }
    }
}
