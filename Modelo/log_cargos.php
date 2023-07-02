<?php

require_once("BasesDeDatos/conexion.php");

class Cargos
{
    private $id_car, $cargo, $sueldo, $descrip_cargo, $datos;

    public function __construct($id, $cargo, $sueldo, $descripcion)
    {
        $this->id_car = $id;
        $this->cargo = $cargo;
        $this->sueldo = $sueldo;
        $this->descrip_cargo = $descripcion;
    }

    public function getIdcargo()
    {
        return $this->id_car;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function getDescripcion()
    {
        return $this->descrip_cargo;
    }

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Cargos;";

        #Procesar la consulta de datos
        $resuls_cargos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_cargos;
    }
    public function Agregar(){
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Cargos(cargo, sueldo, descrip_cargo) VALUES ('{$this->getCargo()}', {$this->getSueldo()}, '{$this->getDescripcion()}');";

        #Procesar la consulta de datos
        $resuls_cargos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_cargos;
    }
}
