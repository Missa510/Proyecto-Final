<?php
class Register
{
    public static function register()
    {
        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        $tipo = $_POST["tipo"];

        # var_dump(preg_match($parametersText, $nom), preg_match($parametersEmail, $email), preg_match($parametersText, $pass));

        if (preg_match($parametersText, $nom) and preg_match($parametersEmail, $email) and preg_match($parametersText, $pass)) {

            #Llamar a la lógica de los usuarios
            require_once("Modelo/log_users.php");

            #Verificación de correo electrónico
            $ver = new Usuarios(null, null, null, $email, null);

            #Llamar la función con los datos nuevos
            $ver_func = $ver->VerificacionDeCorreo();

            #Convertir el objecto de SQL a string
            $verificador =  serialize(mysqli_fetch_object($ver_func));

            # Si la función regresa algo tons mal ahí, ya existe un correo
            if ($verificador != "N;") {
                echo "<script> alert('Error: El correo ".$email." ya posee un usuario existente. Intenta con otro correo electrónico 😢') </script>";
                require_once("Vista\Contenido\Empresa_login_registro.php");
            } else {
                try {
    
                    #Instanciar la lágica de Usuarios
                    $datos = new Usuarios(NULL, $nom, $pass, $email, $tipo);
    
                    #Llamar la función con los datos nuevos
                    $insert = $datos->Insertar();
    
                    #Actualizar los datos registradas
                    require_once("Vista/Componentes/complete_register.php");
                    require_once("Vista/Contenido/cuentas.php");
    
                    #Envio de mensaje de confirmación
    
                    mail($email, "Verificación Completada S&J", "Se realizó el proceso de registro de la empresa S&J. Que tenga un buen día ♥");
                } catch (Exception $e) {
                    session_abort();
                    echo "Error: " . $e;
                }
            }
        } else {
            echo "<script> alert('Error: Algunos de los datos no cumple con los requerimientos necesarios. Por favor, intenta de nuevo 😢') </script>";
            require_once("Vista\Contenido\Empresa_login_registro.php");
        }
    }
    public function registroAdmin()
    {
        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        if (preg_match($parametersText, $nom) and preg_match($parametersEmail, $email) and preg_match($parametersText, $pass)) {
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
        } else {
            echo "<script> alert('Error: Algunos de los datos no cumple con los requerimientos necesarios. Por favor, intenta de nuevo 😢') </script>";
            require_once("Vista\Contenido\Formularios\Regis_admin.php");
        }
    }

    public function registroModer()
    {
        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        if (preg_match($parametersText, $nom) and preg_match($parametersEmail, $email) and preg_match($parametersText, $pass)) {
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
        } else {
            echo "<script> alert('Error: Algunos de los datos no cumple con los requerimientos necesarios. Por favor, intenta de nuevo 😢') </script>";
            require_once("Vista\Contenido\Formularios\Regis_moder.php");
        }
    }

    public function registroUser()
    {
        $parametersText = "/^[A-Za-z0-9]/i";
        $parametersEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        $nom = $_POST["sus"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        $tipo = $_POST["tipo"];

        # var_dump(preg_match($parametersText, $nom), preg_match($parametersEmail, $email), preg_match($parametersText, $pass));

        if (preg_match($parametersText, $nom) and preg_match($parametersEmail, $email) and preg_match($parametersText, $pass)) {

            #Llamar a la lógica de los usuarios
            require_once("Modelo/log_users.php");

            #Verificación de correo electrónico
            $ver = new Usuarios(null, null, null, $email, null);

            #Llamar la función con los datos nuevos
            $ver_func = $ver->VerificacionDeCorreo();

            #Convertir el objecto de SQL a string
            $verificador =  serialize( mysqli_fetch_object($ver_func) );
            
            # Si la función regresa algo tons mal ahí, ya existe un correo
            if ($verificador != "N;") {
                echo "<script> alert('Error: El correo ".$email." ya posee un usuario existente. Intenta con otro correo electrónico 😢') </script>";
                require_once("Vista\Contenido\Empresa_login_registro.php");
            } else {
                try {
    
                    #Instanciar la lágica de Usuarios
                    $datos = new Usuarios(NULL, $nom, $pass, $email, $tipo);
    
                    #Llamar la función con los datos nuevos
                    $insert = $datos->Insertar();
    
                    #Actualizar los datos registradas
                    require_once("Vista/Componentes/complete_register.php");
                    require_once("Vista/Contenido/cuentas.php");
    
                    #Envio de mensaje de confirmación
                    # mail($email, "Verificación Completada S&J", "Se realizó el proceso de registro de la empresa S&J. Que tenga un buen día ♥");
                } catch (Exception $e) {
                    session_abort();
                    echo "Error: " . $e;
                }
            }
        } else {
            echo "<script> alert('Error: Algunos de los datos no cumple con los requerimientos necesarios. Por favor, intenta de nuevo 😢') </script>";
            require_once("Vista\Contenido\Formularios\Regis_user.php");
        }
    }
};
