<?php
    //VALIDAR PAGINAS
    if(isset($_GET['control']) && isset($_GET['funcion']))
    {
        $control = $_GET['control'];
        $funcion = $_GET['funcion'];
        //INVOCAR LA FUNCION LLAMADO Y ENVIAR DATOS
        llamado($control,$funcion);

    }//FIN IF
    else
    {
        $control = 'home';
        $funcion = 'principal';
        //INVOCAR LA FUNCION LLAMADO Y ENVIAR DATOS
        llamado($control,$funcion);
    }
    
    //FUNCION LLAMADO
    function llamado($control,$funcion)
    {
        //LLAMAR CUALQUIER ARCHIVO QUE ESTE EN LA CARPETA CONTROLADOR
        require_once("controlador/control_".$control.".php");
        switch ($control) 
        {
            case 'home': /* INSTANCIAR */
                $control = new Pagina(); 
                break;
        }//FIN SWITCH
        //LLAMAR FUNCION 
        $control->{$funcion}();

    };//FIN LLAMADO
?> 