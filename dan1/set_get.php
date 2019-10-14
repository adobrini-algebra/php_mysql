<?php

class Datum{

    private $dan;
    private $mjesec;
    private $godina;

    public function set_dan($dandan){
        $this->dan = $dandan;
    }

    public function get_dan(){
        return $this->dan;
    }

    public function set_mjesec($mjesec){
        $this->mjesec = $mjesec;
    }

    public function get_mjesec(){
        return $this->mjesec;
    }

    public function set_godina($godina){
        $this->godina = $godina;
    }

    public function get_godina(){
        return $this->godina;
    }

    public function print(){
        echo $this->dan;
        echo $this->mjesec;
        echo $this->godina;
    }
}

$datum = new Datum();
$datum->set_dan('Utorak');
//echo $datum->get_dan();
$datum->set_mjesec('Listopad');
$datum->set_godina(2019);
$datum->print();

echo '<br>';

$datum2 = new Datum();
$datum2->set_dan('Srijeda');
$datum2->set_mjesec('Studeni');
$datum2->set_godina(2020);
$datum2->print();

?>