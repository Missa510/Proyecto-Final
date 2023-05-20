<?php

class Eliminar
{
    public function eliminar()
    {
        if ($_GET["type"] == "Admin") {

            require_once("Modelo/log_admin.php");

            $ID = $_GET["id_admin"];

            require_once("Vista\Componentes\PartesDePagina\advertencia.php");

            if ($verificacion == 1) {

                $delete = new Administradores($ID, NULL, NULL, NULL, 2);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista/Contenido/cuentas.php");

            } else {
                echo "OK :)";
            }



        } else if ($_GET["type"] == "Moder") {

            require_once("Modelo/log_moders.php");

            $ID = $_GET["id_mod"];

            require_once("Vista\Componentes\PartesDePagina\advertencia.php");

            if ($verificacion == 1) {

                $delete = new Moderadores($ID, NULL, NULL, NULL, 2);
                $delete_fun = $delete->Eliminar();

                require_once("Vista/Componentes/eliminacion_finalizada.php");
                require_once("Vista/Contenido/cuentas.php");

            } else {
                echo "OK :)";
            }


        } else if ($_GET["type"] == "User") {

            require_once("Modelo/log_users.php");

            $ID = $_GET["id_usu"];

            require_once("Vista\Componentes\PartesDePagina\advertencia.php");

            ?>
                    <script>
                        if (localStorage.getItem("con")) {
                            if (localStorage.getItem("con") == true) {
                                </script>
                            <?php
                                $delete = new Usuarios($ID, NULL, NULL, NULL, 2);
                                $delete_fun = $delete->Eliminar();

                                require_once("Vista/Componentes/eliminacion_finalizada.php");
                                require_once("Vista/Contenido/cuentas.php");
                            ?>
                            <script>
                            } else {
                                </script>
                                <?php echo "OK 😘"; ?>
                                <script>
                            }

                        }
                    </script>
                <?php

                exit();

                if ($verificacion == 1) {

                    $delete = new Usuarios($ID, NULL, NULL, NULL, 2);
                    $delete_fun = $delete->Eliminar();

                    require_once("Vista/Componentes/eliminacion_finalizada.php");
                    require_once("Vista/Contenido/cuentas.php");

                } else {
                    echo "OK :)";
                }

        }

        exit();
    }
}