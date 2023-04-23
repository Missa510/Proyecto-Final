<?php

session_start();


class Login
{
    // function conex(){require_once("Conexion/conexion_base.php");}
    public function logear()
    {

        $name = $_POST['sus'];
        $pass = $_POST['pass'];
        $tipo = $_POST['tipo'];

        sleep(0.7);

        /* Administradores */
        if ($tipo == "Administrador") {
            require_once("Modelo/log_admin.php");

            #Instanciar la clase 
            $clase = new Administradores(NULL, $name, $pass, $tipo);
            $clase_login = $clase->LoginBuscar();

            $rows = mysqli_num_rows($clase_login); // Pasar por cada fila

            if ($rows) {
                include("Vista/Contenido/AdminSNJ.php");
            } else {
                include("Vista/Componentes/error_login.php");
            }
        }

        /* Moderadores */ elseif ($tipo == "Moderador") {
            require_once("Modelo/log_moders.php");

            $clase = new Moderadores(NULL, $name, $pass, $tipo);
            $clase_login = $clase->LoginBuscar();

            $rows = mysqli_num_rows($clase_login); // Pasar por cada fila


            if ($rows) {
                include("Vista/Contenido/ModerSNJ.php");
            } else {
                include("Vista/Componentes/error_login.php");
            }
        }

        /* Usuarios normales */ elseif ($tipo == "Usuario Corriente") {
            require_once("Modelo/log_users.php");

            $clase = new Usuarios(NULL, $name, $pass, $tipo);
            $clase_login = $clase->LoginBuscar();

            $rows = mysqli_num_rows($clase_login); // Pasar por cada fila


            if ($rows) {
                include("Vista/Contenido/UsuNomSNJ.php");
            } else {
                include("Vista/Componentes/error_login.php");
            }
        } else {
            include("Vista/Componentes/error_login.php");
        }
    }
};
