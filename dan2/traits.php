<?php

trait Setter {

    public function getTitle(){
        echo '<h1>Traits</h1>';
    }

    public function getHtml(){

    }
}

class Page{

    use Setter;
}

$page = new Page();
$page->getTitle();
// prazan objekt
var_dump($page);