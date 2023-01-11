<?php
    class Categoria{
        private $nome;
        private $simbolo;

        public function __construct(string $nome, string $simbolo)
        {  $this -> nome = $nome;
            $this -> simbolo = $simbolo;
            
        }

        public function getNome(){
            return $this -> nome;
        }

        public function getSimbolo(){
            return $this -> simbolo;
        }
    }