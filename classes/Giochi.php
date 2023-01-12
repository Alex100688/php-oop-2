<?php 
    require_once __DIR__. "/Prodotti.php";
    class Gioco extends prodotti{
        private $materiale;

        public function setGame($materia){
            if($materia !== "plastica"){
                throw new Exception("Non hai inserito la parola giusta");
            }
            $this -> materiale = $materia;
        }

       
        public function getGame(){
            return $this -> materiale;
        }
    }