<?php

#llamar al modelo
require_once("Modelo\log_cursos.php");
require_once("Modelo\log_sedes.php");
class Admin_Cursos
{
    public function ppal_cursos()
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

    public function InserCursos()
    {
        $cod = $_POST["txCodCur"];
        $nom = $_POST["txNomCur"];
        $sede = $_POST["cbSede"];

        #Instanciar lógica de cursos
        $datos = new Clase_curso($cod, $nom, $sede);

        #Llamar a RegCursos
        $insert = $datos->RegCursos();

        #Actualizar la lista
        $this->ppal_cursos();
    } #Fin InserCursos

    public function ModificarCursos()
    {
        #Asignar la variable cod_act
        $cod_mod = $_GET["cod_act"];

        #Instanciar lógica de cursos
        $moder = new Clase_curso($cod_mod, null, null);
        $reporte = $moder->BuscarCursos();

        #Instanciar del combo de la sede
        $reporteCombo = new Clase_Sedes(null, null);

        #Llamar a la funcion del combo
        $listaCombo = $reporteCombo->ComboSede();


        #Llamar al formulario modificar
        require_once("Vista/Cursos/frm_cursoso_modificar.php");
    } #Fin ModificarCursos

    public function ActualizarCursos()
    {
        $cod = $_POST["txCodCur"];
        $nom = $_POST["txNomCur"];
        $sede = $_POST["cbSede"];

        #Instanciar lógica de cursos
        $datos = new Clase_curso($cod, $nom, $sede);

        #Llamar a RegCursos
        $actualizar = $datos->ActualizarCursos();

        #Actualizar la lista
        $this->ppal_cursos();

    } #Fin ActualizarCursos

}; //Fin Admin_Cursos