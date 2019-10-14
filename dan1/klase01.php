<?php

class Covjek {

    public $ime;
    public $godine;
    protected $visina;
    private $masa;

    private function sjedenje(){

    }

    private function razmisljanje(){

    }
}

$objekt = new Covjek();
$covjek = new Covjek();
$aleksandar = new Covjek();
$ivan = new Covjek();

class Automobil{

    private $br_kotaca;
    private $boja;
    private $kilometraza;
    private $brzina;

    public function prevozi(){

    }

    public function pumpam_ego(){

    }
}

class SUV extends Automobil {

    private $pogon_na_4_kotaca;

    private function strmi_uspon(){

    }
}

class SportsCar extends Automobil{
    
}

?>