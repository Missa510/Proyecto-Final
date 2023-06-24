<?php

require_once("Modelo\log_administrador.php");

class AdministradorControl
{
    public function home()
    {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $base = new Administrador(null, $user, $password, null);
        $base_consul = $base->Login();

        $veri = mysqli_num_rows($base_consul);

        if($veri){
            require_once("vista\web\paginas\administrador.php");
        } else {
            require_once("vista/web/paginas/errors/error_login.php");
            require_once("vista\web\paginas\loginAdministrador.php");
        }
    }
    public function login()
    {
        require_once("vista\web\paginas\loginAdministrador.php");
    }
}
