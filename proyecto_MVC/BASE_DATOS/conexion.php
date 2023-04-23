<?php

    class Conexion{
        /* Metodo con */
        public static function con(){
            try{
                return mysqli_connect("localhost","root", "", "proyectomvc_v1");//Servidor. usuario, contraseña y base de datos
            }
            catch(Exception $e){ //Por si hay error
                echo "Error al conectarse a la base de datos :(";
            }
        }//Fin conexion
    }//Fin conexion

    #Probar a conexion a la base de datos 
    /*$prueba = new Conexion();

    if ($prueba->con()){echo "Si existe la conexion a la base de datos :3";}//Fin if
    else{echo "No hay conexion a la base de datos :(";}//Fin else
    */
