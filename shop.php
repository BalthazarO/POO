<?php
    require_once('articles.php');
    require_once('devise.php');
    require_once('convertiseur.php');

    class ordinateur extends articles{
        public function __construct() {
                parent::__construct('Ordinateur', 1500, "DOLLAR");
        }
    }
    $ordinateur = new Ordinateur;

    class souris extends articles{
        public function __construct() {
                parent::__construct('Souris', 20, "EURO");
        }
    }
    $souris = new Souris;

    class tablette extends articles{
        public function __construct() {
                parent::__construct('Tablette', 6000, "YEN");
        }
    }
    $tablette = new Tablette;

    class clavier extends articles{
        public function __construct() {
                parent::__construct('Clavier', 120, "LIVRE");
        }
    }
    $clavier = new Clavier;
?>

