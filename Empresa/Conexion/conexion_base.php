<?php
    //Conexion a la base de datos
   
    class BaseDeDatos{
        function conex(){
            return $conexiones_base = mysqli_connect("localhost", "root", "", "usuario_proyecto");
        }
    }
    // mysqli_set_charset($conexiones_base, "utf8");
?>