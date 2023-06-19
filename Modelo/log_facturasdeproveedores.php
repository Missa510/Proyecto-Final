<?php

require_once("BasesDeDatos\conexion.php");
class Facturasdeproveedores
{
    private $Id_facompras, $fecha_facompras, $fkproducto, $fkproveedor, $fksede;

    public function __construct($id, $fechadecompra, $producto, $proveedor, $sede)
    {
        $this->Id_facompras = $id;
        $this->fecha_facompras = $fechadecompra;
        $this->fkproducto = $producto;
        $this->fkproveedor = $proveedor;
        $this->fksede = $sede;
    }

    #Métodos get
    public function getId_facompras()
    {
        return $this->Id_facompras;
    }
    public function getFecha_facompras()
    {
        return $this->fecha_facompras;
    }
    public function getFkproducto()
    {
        return $this->fkproducto;
    }
    public function getFkproveedor()
    {
        return $this->fkproveedor;
    }
    public function getFksede()
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
        $sql = "SELECT fact.id_facompras, fact.fecha_facompras, fact.cant_produc, prod.precio_compra, prod.nom_produc, prov.nom_prov, sed.nom_sed FROM Facturasdeproveedores as fact, Proveedores as prov, Productos as prod, Sedes as sed WHERE fact.fkproduc = prod.id_produc AND fact.fkprov = prov.id_prov AND fact.fksede = sed.id_sede ORDER BY fact.fecha_facompras;";

        #Procesar la consulta de datos
        $resuls_factucompras = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_factucompras;
    }
}
