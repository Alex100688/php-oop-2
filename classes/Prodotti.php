<?php
    class Prodotti{
        private $nome;
        private $immagine;
        private $prezzo;
        private $utilizzo;

        public function __construct(string $nome, string $immagine, $prezzo, $utilizzo)
        {   $this -> nome = $nome;
            $this -> immagine = $immagine;
            $this -> prezzo = $prezzo;
            $this -> utilizzo = $utilizzo;
           
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


    }