<?php
    // // Conection with the database
    // $conexiones_base = mysqli_connect("localhost", "root", "", "usuario_proyecto");
    // mysqli_set_charset($conexiones_base, "utf8");
    
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
        }

        $control->{$funcion}();
    }

?>