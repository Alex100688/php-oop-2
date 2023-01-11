<?php
    class Prodotti{
        private $nome;
        private $immagine;
        private $prezzo;
        private $utilizzo;
        private $categoria;

        public function __construct(string $nome, string $immagine, float $prezzo, $utilizzo, Categoria $categoria)
        {   $this -> nome = $nome;
            $this -> immagine = $immagine;
            $this -> prezzo = $prezzo;
            $this -> utilizzo = $utilizzo;
            $this -> categoria = $categoria;
           
        }

        public function getName(){
           return $this -> nome;
        }

        public function getImage(){
            return $this -> immagine;
        }

        public function getPrice(){
            return $this -> prezzo;
        }

        public function getUtility(){
            return $this -> utilizzo;
        }

        public function getCategory(){
            return $this -> categoria;
        }
    }