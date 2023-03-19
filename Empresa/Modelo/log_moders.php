<?php
    require_once("../Conexion/conexion_base.php");
    class Moderadores{
        private $Id_moder, $nom_mod, $pass_mod, $tipo_mod;
        public function __construct($dat1, $dat2, $dat3, $dat4){
            $this->Id_moder = $dat1;
            $this->nom_mod = $dat2;
            $this->pass_mod = $dat3;
            $this->tipo_mod = $dat4;
        }
        public function Validar(){
            $val = 0;
        }
    };

?>