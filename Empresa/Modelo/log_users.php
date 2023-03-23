<?php
    require_once("Conexion/conexion_base.php");
    class Usuarios{

        private $Id_usu, $nom_usu, $pass_usu, $tipo_usu;

        public function __construct($dat1, $dat2, $dat3, $dat4){
            $this->Id_usu = $dat1;
            $this->nom_usu = $dat2;
            $this->pass_usu = $dat3;
            $this->tipo_usu = $dat4;
        }
        public function Mostrar(){
            $base = new BaseDeDatos();
            $conex_var = $base->conex();
            $resuls_users = mysqli_query($conex_var, "SELECT * FROM Usuario_corriente");
            return $resuls_users;
        }
    };

?>