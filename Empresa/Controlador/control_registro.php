<?php
class Register
{
    public static function register()
    {
        session_start();

        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
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
                $datos = new Usuarios(NULL, $nom, $pass, $email, NULL);

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

    public function registroAdmin()
    {
        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        
        try {
            #Llamar a la lógica de los usuarios
            require_once("Modelo/log_admin.php");

            #Instanciar la lágica de Usuarios
            $datos = new Administradores(NULL, $nom, $pass, $email, NULL);

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

    public function registroModer()
    {
        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        try {
            #Llamar a la lógica de los usuarios
            require_once("Modelo/log_moder.php");

            #Instanciar la lágica de Usuarios
            $datos = new Moderadores(NULL, $nom, $pass, $email, NULL);

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

    public function registroUser()
    {
        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        
        try {
            #Llamar a la lógica de los usuarios
            require_once("Modelo/log_users.php");

            #Instanciar la lágica de Usuarios
            $datos = new Usuarios(NULL, $nom, $pass, $email, NULL);

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
};
