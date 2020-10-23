<?php
require "AbstractModelo.php";
    class Planeta extends Modelo{
        private $nombre;

        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

    }
?>