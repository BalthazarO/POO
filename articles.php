<?php

    class articles{
        
        public $article;

        public function __construct($nom, $prix, $devise) {
            $this->nom = $nom;
            $this->prix = $prix;
            $this->devise = $devise; 
        }

        public function nom(){
            return $this-> $nom;
        }

        public function prix(){
            return $this-> $prix;
        }

        public function devise(){
            return $this-> $devise;
        }
    }
?>