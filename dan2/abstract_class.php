<?php

abstract class Page{

    private $html;

    abstract protected function getHtml();

    public function printOut(){

        echo $this->getHtml();
    }
}

class HomePage extends Page {
    
    public function getHtml(){
        return '<h1>Abstract Class</h1>';
    }
}

$obj = new HomePage();
$obj->printOut();