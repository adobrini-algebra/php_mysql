<?php

interface ITemplate {
    public function getTitle();
    public function setTitle($title);
    public function getTemplate();
    public function setTemplate($template);
}

class Page implements ITemplate {

    private $title;
    private $template;

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTemplate(){
        return $this->template;
    }

    public function setTemplate($template){
        $this->template = $template;
    }

    public function print(){
        echo $this->template;
    }
}

$page = new Page();
$page->setTitle('PHP Interfaces');
$page->setTemplate('
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>' . $page->getTitle() . '</title>
    </head>
    <body>
        <h1>Interfaces</h1>
    </body>
    </html>');

$page->print();

?>
