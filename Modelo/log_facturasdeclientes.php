<?php

require_once("BasesDeDatos\conexion.php");
class Facturasdeclientes
{
    private $Id_faclient, $fecha_faclient, $cant_clien, $precio_clien, $descuen, $fkpord, $fkclien, $fksede;

    public function __construct($Id, $fecha, $cantidad, $precio, $descuento, $producto, $cliente, $sede)
    {
        $this->Id_faclient = $Id;
        $this->fecha_faclient = $fecha;
        $this->cant_clien = $cantidad;
        $this->precio_clien = $precio;
        $this->descuen = $descuento;
        $this->fkpord = $producto;
        $this->fkclien = $cliente;
        $this->fksede = $sede;
    }

    public function getIdfaclient()
    {
        return $this->Id_faclient;
    }
    public function getFechafaclient()
    {
        return $this->fecha_faclient;
    }
    public function getCantclient()
    {
        return $this->cant_clien;
    }
    public function getPrecioclient()
    {
        return $this->precio_clien;
    }
    public function getDescuento()
    {
        return $this->descuen;
    }
    public function getProduct()
    {
        return $this->fkpord;
    }
    public function getClient()
    {
        return $this->fkclien;
    }
    public function getSede()
    {
        return $this->fksede;
    }
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT fact.id_facentregas, fact.fecha_facentregas, fact.cant_produc, prod.precio_venta, fact.descuento, prod.nom_produc, cli.dni_clien, cli.ape_clien, cli.nom_clien, sed.nom_sed FROM Facturasdeclientes AS fact, Productos AS prod, Clientes AS cli, Sedes AS sed WHERE fact.fkproduc = prod.id_produc AND fact.fkclient = cli.id_clien AND fact.fksede = sed.id_sede;";

        #Procesar la consulta de datos
        $resuls_faclientes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_faclientes;
    }
}