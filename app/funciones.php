<?php

class Usuarios
{
    public function login_usuario($a)
    {
        if ($a == 1) {
            //$success = TRUE;
            //return $success;
            header("location: /Views/Equipos/Equipos.php");
        } else {
            $success = FALSE;
            //return $success;
            $error = "*Usuario o contraseña incorrectos. Por favor verifique sus datos e intente nuevamente";
        }
    }
}
