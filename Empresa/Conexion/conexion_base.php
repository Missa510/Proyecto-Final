<?php
    #Conexion a la base de datos
   
    class BaseDeDatos{
        function conex(){
            try{
                return $conexiones_base = mysqli_connect("localhost", "root", "", "usuario_proyecto");
            }
            catch(Exception $e){ //Por si hay error
                echo "<script> alert('Error al conectarse a la base de datos :(') </script> <i>". $e. "</i><br>";
            }
        }
    }
    #mysqli_set_charset($conexiones_base, "utf8");
?>