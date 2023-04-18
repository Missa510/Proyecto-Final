<?php

#llamar al modelo
require_once("Modelo\log_estudiantes.php");
class Admin_Estudiantes
{
    function ppal_estudiantes()
    {
        #Instanciar a la clase
        $reporte = new Clase_estudiantes(null, null, null, null, null, null);

        #Llamar a la función lista
        $listado = $reporte->ListaTodos();

        //llamara al formilaio de cursos
        require_once("Vista/Estudiantes/frm_estudiantes.php");
    } //Fin ppal_cursos
} //Fin Admin_Cursos