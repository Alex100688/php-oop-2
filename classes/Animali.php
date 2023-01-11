<?php
    class Categoria{
        private $nome;
        private $simbolo;

        public function __construct(string $nome, string $simbolo)
        {  $this -> nome = $nome;
            $this -> simbolo = $simbolo;
            
        }

        public function getNomeAnimale(){
            return $this -> nome;
        }

        public function setNomeAnimale($name){
            return $this -> nome = $name;
        }

        public function getSimboloAnimale(){
            return $this -> simbolo;
        }
    }