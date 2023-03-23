<?php
    session_start();
    require_once("Conexion/conexion_base.php");

    // require_once("Modelo/log_admin.php");
    // require_once("Modelo/log_moders.php");
    // require_once("Modelo/log_users.php");

    class Login{
        // function conex(){require_once("Conexion/conexion_base.php");}
        public function logear(){

            $name = $_POST['sus'];
            $pass = $_POST['pass'];
            $tipo = $_POST['tipo'];

            sleep(0.7);

            $base = new BaseDeDatos();
            $conex_var = $base->conex();

            /* Administradores */
            if($tipo == "Administrador"){

                $veri = "SELECT * FROM Administradores WHERE nom_admin = '{$name}' AND pass_admin = '{$pass}' AND tipo_admin = '{$tipo}'";
                $resul = mysqli_query($conex_var, $veri);   
        
                $rows = mysqli_num_rows($resul); // Pasar por cada fila


                if($rows){include("Vista/Contenido/AdminSNJ.php");}
                else{
                    include("Vista/Componentes/error_login.php");
                }
            }

            /* Moderadores */
            elseif($tipo == "Moderador"){
                require_once("Conexion/conexion_base.php");

                $veri = "SELECT * FROM Moderadores WHERE nom_mod = '{$name}' AND pass_mod = '{$pass}' AND tipo_mod = '{$tipo}'";
                $resul = mysqli_query($conex_var, $veri);   
        
                $rows = mysqli_num_rows($resul); // Pasar por cada fila


                if($rows){include("Vista/Contenido/ModerSNJ.php");}
                else{
                    include("Vista/Componentes/error_login.php"); 
                }
            }

            /* Usuarios normales */
            elseif($tipo == "Usuario Corriente"){
                require_once("Conexion/conexion_base.php");

                $veri = "SELECT * FROM Usuario_corriente WHERE nom_usu = '{$name}' AND pass_usu = '{$pass}' AND tipo_usu = '{$tipo}'";
                $resul = mysqli_query($conex_var, $veri);   
        
                $rows = mysqli_num_rows($resul); // Pasar por cada fila


                if($rows){include("Vista/Contenido/UsuNomSNJ.php");}
                else{
                    include("Vista/Componentes/error_login.php");
                }
            }
            else{include("Vista/Componentes/error_login.php");}
            // echo '<p class = "fs-5">'.$veri.'</p>'; //ver si se insertó el código
        }
    };
    
?>