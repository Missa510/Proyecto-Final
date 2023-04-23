<?php

require_once("BASE_DATOS/conexion.php");
/* La clase curso */
class Clase_curso
{
    //Atributos
    private $CodCur, $NomCur, $CodSed, $datos;

    //Métodos: Constructor, Get y Set y Los métodos de la clase
    function __construct($Cod, $Nom, $Sed)
    {
        //Pasar valores a los atributos
        $this->CodCur = $Cod;
        $this->NomCur = $Nom;
        $this->CodSed = $Sed;
    } //fin de método constructor

    public function setCodCur($Cod)
    {
        $this->CodCur = $Cod;
    }
    public function getCodCur()
    {
        return $this->CodCur;
    }

    public function setNomCur($Nom)
    {
        $this->NomCur = $Nom;
    }
    public function getNomCur()
    {
        return $this->NomCur;
    }

    public function setCodSed($Sed)
    {
        $this->CodSed = $Sed;
    }
    public function getCodSed()
    {
        return $this->CodSed;
    }

    public function ListaTodos()
    {
        #Instanciar
        $conectar = new Conexion();
        #funcion de la conexion
        $llamada = $conectar->con();

        #Consulta a ejecutar
        $sql = "SELECT * FROM cursos";
        #Procesar la consulta y llamar a la DB
        $resp = mysqli_query($llamada, $sql); #Conexion y la consulta 
        #Generar y enviar
        while ($registro = mysqli_fetch_array($resp)) {
            $this->datos[] = $registro;
        }
        #Retornar el arreglo
        return $this->datos;
    }

    function RegCursos()
    {
        #Instanciar
        $conectar = new Conexion();
        #funcion de la conexion y llamar a la DB
        $llamada = $conectar->con();

        #Generar la consulta
        $sql = "INSERT INTO cursos (pkcod_cur, nom_cur, fkcod_sede) VALUES ({$this->getCodCur()}, '{$this->getNomCur()}', {$this->getCodSed()});";
        
        #Procesar la consulta
        $resp = mysqli_query($llamada, $sql);

        #Retornar la respuesta
        return $resp;
    }
} //Fin clase
