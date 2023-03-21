<?php
    // // Conection with the database
    
    //Navegación desde cero
    if(isset($_GET["control"]) and isset($_GET["funcion"])){
        $control = $_GET["control"];
        $funcion = $_GET["funcion"];
        Navegacion($control, $funcion);

    }
    else{
        $control = "navegacion";
        $funcion = 'principal';
        Navegacion($control, $funcion);
    }
    function Navegacion($control, $funcion){

        require_once("Controlador/control_".$control.".php");

        switch ($control){
            case 'navegacion':
                $control = new Paginas();
                break;

            case 'login':
                $control = new Login();
                break;
        }

        $control->{$funcion}();
    }

?>