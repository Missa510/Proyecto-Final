<?php

    //Crear la clase de las paginas
    class Home{
        function principal(){
            //Llamar el archivo para iniciar mi paginas
            include("Vista\Paginas\inicio.php");
        }//Fin principal

        function menu(){
            include("Vista\Paginas\menu.php");
        }//Fin menu
    }//Fin Home
