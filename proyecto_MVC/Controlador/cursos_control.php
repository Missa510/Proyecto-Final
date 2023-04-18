<?php

#llamar al modelo
require_once("Modelo\log_cursos.php");
class Admin_Cursos
{
    function ppal_cursos()
    {
        #Instanciar a la clase
        $reporte = new Clase_curso(null, null, null);

        #Llamar a la función lista
        $listado = $reporte->ListaTodos();

        //llamara al formilaio de cursos
        require_once("Vista/Cursos/frm_cursos.php");
    } //Fin ppal_cursos
} //Fin Admin_Cursos