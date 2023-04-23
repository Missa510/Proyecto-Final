<?php

require_once("BASE_DATOS/conexion.php");

class Clase_Sedes
{
    #Atributos
    private $CodSed, $NomSed;

    #Método constructor
    public function __construct($Cod, $Nom)
    {
        $this->CodSed = $Cod;
        $this->NomSed = $Nom;
    }

    #Métodos Set
    public function setCodSede($Cod)
    {
        $this->CodSed = $Cod;
    }
    public function setNomSede($Nom)
    {
        $this->NomSed = $Nom;
    }

    #Métodos Get
    public function getCodSede()
    {
        return $this->CodSed;
    }
    public function getNomSede()
    {
        return $this->NomSed;
    }

    #Funcionaes de la clase
    function ComboSede(){
       #Instanciar
       $conectar = new Conexion();

       #funcion de la conexion
       $llamada = $conectar->con();

       #Generar consulta
       $sql = "SELECT pkcod_sede, nom_sede FROM sede;";

       #Procesar consulta
       $datos = mysqli_query($llamada, $sql);
       return $datos;
    }
};
