<?php

require_once("BasesDeDatos/conexion.php");
class Productos
{
    private $Id_produc, $nom_produc, $precio_venta, $precio_compra, $datos;

    public function __construct($id, $producto, $precio_venta, $precio_compra)
    {
        $this->Id_produc = $id;
        $this->nom_produc = $producto;
        $this->precio_venta = $precio_venta;
        $this->precio_compra = $precio_compra;
    }

    # Métodos get
    public function getId_produc()
    {
        return $this->Id_produc;
    }
    public function getNom_produc()
    {
        return $this->nom_produc;
    }
    public function getPrecioVenta()
    {
        return $this->precio_venta;
    }
    public function getPrecioCompra()
    {
        return $this->precio_compra;
    }

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Productos;";

        #Procesar la consulta de datos
        $resuls_productos = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_productos;
    }
}
