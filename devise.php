<?php
    require_once('convertiseur.php');

    class EUR extends convertisseur{
        public function __construct() {
                parent::__construct(1, '€');
        }
    }
    $EUR = new EUR;

    class Dollar extends convertisseur{
        public function __construct() {
                parent::__construct(1.1386, '€'); //for test no real convertion
        }
    }
    $Dollar = new Dollar;

    class Yen extends convertisseur{
        public function __construct() {
                parent::__construct(125.90, 'Yen');//for test no real convertion
        }
    }
    $Yen = new Yen;

    class Livre extends convertisseur{
        public function __construct() {
                parent::__construct(125.90, 'Livre');//for test no real convertion
        }
    }
    $Livre = new Livre;

?>