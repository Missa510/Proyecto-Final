<?php

#llamar al modelo
require_once("Modelo\log_cursos.php");
require_once("Modelo\log_sedes.php");
class Admin_Cursos
{
    function ppal_cursos()
    {
        #Instanciar del combo de la sede
        $reporteCombo = new Clase_Sedes(null, null);
        
        #Llamar a la funcion del combo
        $listaCombo = $reporteCombo->ComboSede();

        #Instanciar a la clase
        $reporte = new Clase_curso(null, null, null);

        #Llamar a la función lista
        $listado = $reporte->ListaTodos();

        //llamara al formilaio de cursos
        require_once("Vista/Cursos/frm_cursos.php");

    } //Fin ppal_cursos

    function InserCursos(){
        $cod = $_POST["txCodCur"];
        $nom = $_POST["txNomCur"];
        $sede = $_POST["cbSede"];

        #Instanciar lógiva de cursos
        $datos = new Clase_curso($cod, $nom, $sede);

        #Llamar a RegCursos
        $insert = $datos->RegCursos();

        #Actualizar la lista
        $this->ppal_cursos();
    }#Fin InserCursos

} //Fin Admin_Cursos