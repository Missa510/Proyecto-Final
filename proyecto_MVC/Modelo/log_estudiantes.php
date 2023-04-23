<?php

require_once("BASE_DATOS/conexion.php");
/* La clase curso */
class Clase_estudiantes
{
    //Atributos
    private $CodEstu, $DNIEstu, $ApeEstu, $NomEstu, $DirEstu, $CodcurEstu, $datos;

    //Métodos: Constructor, Get y Set y Los métodos de la clase
    function __construct($Cod, $DNI, $Ape, $Nom, $Dir, $CodCur)
    {
        //Pasar valores a los atributos
        $this->CodEstu = $Cod;
        $this->DNIEstu = $DNI;
        $this->ApeEstu = $Ape;
        $this->NomEstu = $Nom;
        $this->DirEstu = $Dir;
        $this->CodcurEstu = $CodCur;
    } //fin de método constructor

    /* Métodos SET */
    public function setCodEstu($Cod)
    {
        $this->CodEstu = $Cod;
    }
    public function setDNIEstu($DNI)
    {
        $this->DNIEstu = $DNI;
    }
    public function setApeEstu($Ape)
    {
        $this->ApeEstu = $Ape;
    }
    public function setNomEstu($Nom)
    {
        $this->NomEstu = $Nom;
    }
    public function setDirEstu($Dir)
    {
        $this->DirEstu = $Dir;
    }
    public function setCodCur($CodCur)
    {
        $this->CodcurEstu = $CodCur;
    }

    /* Métodos GET */
    public function getCodEstu()
    {
        return $this->CodEstu;
    }
    public function getDNIEstu()
    {
        return $this->DNIEstu;
    }
    public function getApeEstu()
    {
        return $this->ApeEstu;
    }
    public function getNomEstu()
    {
        return $this->NomEstu;
    }
    public function getDirEstu()
    {
        return $this->DirEstu;
    }
    public function getCodCur()
    {
        return $this->CodcurEstu;
    }

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
