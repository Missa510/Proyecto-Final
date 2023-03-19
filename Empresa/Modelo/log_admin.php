<?php
    require_once("../Conexion/conexion_base.php");
    class Administradores{
        private $Id_admin, $nom_adm, $pass_adm, $tipo_adm;
        public function __construct($dat1, $dat2, $dat3, $dat4){
            $this->Id_admin = $dat1;
            $this->nom_adm = $dat2;
            $this->pass_adm = $dat3;
            $this->tipo_adm = $dat4;
        }
        public function Validar(){
            $val = 0;
        }
    };

?>