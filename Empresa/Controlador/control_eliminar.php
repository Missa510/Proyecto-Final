<?php

class Eliminar
{
    public function eliminar()
    {
        if ($_GET["type"] == "Admin") {

            require_once("Modelo/log_admin.php");

            $ID = $_GET["id_admin"];

            require_once("Vista\Componentes\PartesDePagina\advertencia_admin.php");

        } else if ($_GET["type"] == "Moder") {

            require_once("Modelo/log_moders.php");

            $ID = $_GET["id_mod"];

            require_once("Vista\Componentes\PartesDePagina\advertencia_moder.php");



        } else if ($_GET["type"] == "User") {

            require_once("Modelo/log_users.php");

            $ID = $_GET["id_usu"];

            require_once("Vista\Componentes\PartesDePagina\advertencia_user.php");

            exit();



        }

        exit();
    }
    public function confirmacion()
    {
        $verificacion = $_POST["veri"];

        if ($_GET["type"] == "Admin") {

            if ($verificacion == 1) {

                $ID = $_GET["id_admin"];

                $delete = new Administradores($ID, NULL, NULL, NULL, 2);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista/Contenido/cuentas.php");

            } else {
                echo "OK :)";
            }
        } else if ($_GET["type"] == "Moder") {

            if ($verificacion == 1) {

                $ID = $_GET["id_mod"];

                $delete = new Moderadores($ID, NULL, NULL, NULL, 2);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista/Contenido/cuentas.php");

            } else {
                echo "OK :)";
            }
        } else if ($_GET["type"] == "User") {
            if ($verificacion == 1) {

                $ID = $_GET["id_usu"];

                $delete = new Usuarios($ID, NULL, NULL, NULL, 2);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista/Contenido/cuentas.php");

            } else {
                echo "OK :)";
            }
        }
    }
}