<?php 
    require_once __DIR__. "/Prodotti.php";
    class Gioco extends prodotti{
        private $materiale;

        public function setGame($materia){
            return $this -> materiale = $materia;
        }

        public function getGame(){
            return $this -> materiale;
        }
    }