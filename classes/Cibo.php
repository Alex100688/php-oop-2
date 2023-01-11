<?php
    class Cibo extends Prodotti{
        private $tipologia;
        
        public function setCibo($tipo){
            $this -> tipologia = $tipo;
        }

        public function getCibo(){
            return $this -> tipologia;
        }
    }