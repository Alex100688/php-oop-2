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
    }