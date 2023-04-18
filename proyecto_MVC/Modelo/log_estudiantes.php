<?php

require_once("BASE_DATOS/conexion.php");
/* La clase curso */
class Clase_estudiantes
{
    //Atributos
    private $CodEstu, $DNIEstu, $ApeEstu, $NomEstu, $DirEstu, $Codcur, $datos;

    //Métodos: Constructor, Get y Set y Los métodos de la clase
    function __construct($Cod, $DNI, $Ape, $Nom, $Dir, $CodCur)
    {
        //Pasar valores a los atributos
        $this->CodEstu = $Cod;
        $this->DNIEstu = $DNI;
        $this->ApeEstu = $Ape;
        $this->NomEstu = $Nom;
        $this->DirEstu = $Dir;
        $this->Codcur = $CodCur;

    } //fin de método constructor

    public function ListaTodos()
    {
        #Instanciar
        $conectar = new Conexion();
        #funcion de la conexion
        $llamada = $conectar->con();

        #Consulta a ejecutar
        $sql = "SELECT * FROM estudiantes";
        #Procesar la consulta y llamar a la DB
        $resp = mysqli_query($llamada, $sql); #Conexion y la consulta 
        #Generar y enviar
        while ($registro = mysqli_fetch_array($resp)) {
            $this->datos[] = $registro;
        }
        #Retrnar el arreglo
        return $this->datos;
    }
} //Fin clase
