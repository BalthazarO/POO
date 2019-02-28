<?php
    class convertisseur{

        public $convertisseur;

        public function __construct($nomDevise, $valeur) {
            $this->nomDevise = $nomDevise;
            $this->valeur = $valeur;
        }

        public function nomDeDevise(){
            return $this-> $nomDevise;
        }

        public function valeur(){
            return $this-> $valeur;
        }
        
    }
?>