<?php
    session_start();

    // require_once("Modelo/log_admin.php");
    // require_once("Modelo/log_moders.php");
    // require_once("Modelo/log_users.php");

    class Login{
        function conex(){require_once("Conexion/conexion_base.php");}
        public function logear(){

            $name = $_POST['sus'];
            $pass = $_POST['pass'];
            $tipo = $_POST['tipo'];

            /* Administradores */
            if($tipo == "Administrador"){
                require_once("Conexion/conexion_base.php");

                $veri = "SELECT * FROM administradores WHERE nom_admin = '{$name}' AND pass_admin = '{$pass}' AND tipo_admin = '{$tipo}'";
                $resul = mysqli_query($conexiones_base, $veri);   
        
                $rows = mysqli_num_rows($resul); // Pasar por cada fila

                sleep(2);

                if($rows){include("Vista/Contenido/AdminSNJ.php");}
                else{
                    include("Vista/Componentes/error_login.php");
                    include("Vista/Contenido/Empresa_login.php");
                }
            }

            /* Moderadores */
            elseif($tipo == "Moderador"){
                require_once("Conexion/conexion_base.php");

                $veri = "SELECT * FROM moderadores WHERE nom_admin = '{$name}' AND pass_admin = '{$pass}' AND tipo_admin = '{$tipo}'";
                $resul = mysqli_query($conexiones_base, $veri);   
        
                $rows = mysqli_num_rows($resul); // Pasar por cada fila

                sleep(2);

                if($rows){include("Vista/Contenido/ModerSNJ.php");}
                else{
                    include("Vista/Componentes/error_login.php"); 
                    include("Vista/Contenido/Empresa_login.php");
                }
            }

            /* Usuarios normales */
            elseif($tipo == "Usuario Corriente"){
                require_once("Conexion/conexion_base.php");

                $veri = "SELECT * FROM usuario_corriente WHERE nom_admin = '{$name}' AND pass_admin = '{$pass}' AND tipo_admin = '{$tipo}'";
                $resul = mysqli_query($conexiones_base, $veri);   
        
                $rows = mysqli_num_rows($resul); // Pasar por cada fila

                sleep(2);

                if($rows){include("Vista/Contenido/UsuNomSNJ.php");}
                else{
                    include("Vista/Componentes/error_login.php");
                    include("Vista/Contenido/Empresa_login.php");
                }
            }
            // echo '<p class = "fs-5">'.$veri.'</p>'; //ver si se insertó el código
        }
    };
    
?>