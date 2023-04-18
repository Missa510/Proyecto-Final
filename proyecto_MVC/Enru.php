<?php

    //Validar inicio de pagina
    if(isset($_GET["clase"]) and isset($_GET["funcion"])){

        $clase = $_GET["clase"];
        //Enviar datos a la funcion llamar
        $funcion = $_GET["funcion"];
        llamar($clase, $funcion);

    }/* Fin if */ else {

        $clase = 'pagina';
        $funcion = 'principal';
        //Enviar datos a la funcion llamar
        llamar($clase, $funcion);

    }//Fin else

    function llamar($clase, $funcion){
        //Llamar al controlador
        require_once("Controlador/".$clase."_control.php");
        //Cada unos de los ccasos
        switch ($clase) {
            case 'pagina': //Instanciar
                $control = new Home();
                break;
            case 'cursos': //Instanciar
                $control = new Admin_Cursos();
                break;

        }//Fin switch

        //Lamar la funcion de control
        $control->{$funcion}();
    }
?>