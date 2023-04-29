<?php
class Register
{
    public static function register()
    {
        session_start();

        $nom = htmlentities($_POST["sus"], ENT_NOQUOTES, 'UTF-8', false);
        $pass = htmlentities($_POST["pass"], ENT_NOQUOTES, 'UTF-8', false);
        $email = htmlentities($_POST["email"], ENT_NOQUOTES, 'UTF-8', false);
        $tipo = $_POST["tipo"];

        if ($tipo == "Administrador" or $tipo == "Moderador") {
            session_abort();

            require_once("Vista/Componentes/error_register.php");
            require_once("Vista/Contenido/cuentas.php");
        } else {
            try {
                #Llamar a la lógica de los usuarios
                require_once("Modelo/log_users.php");

                #Instanciar la lágica de Usuarios
                $datos = new Usuarios(NULL, $nom, $pass, $email);

                #Llamar la función con los datos nuevos
                $insert = $datos->Insertar();

                #Actualizar los datos registradas
                require_once("Vista/Componentes/complete_register.php");
                require_once("Vista/Contenido/cuentas.php");

                #Envio de mensaje de confirmación
                // mail($email, "Verificación Completada S&J", "Se realizó el proceso de registro de la empresa S&J. Que tenga un buen día :3");
            } catch (Exception $e) {
                session_abort();
                echo "Error: " . $e;
            }
        }
    }
};
