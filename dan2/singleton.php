<?php

class DB{

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        
        if(!self::$instance){
            self::$instance = new DB();
        }
        return self::$instance;
    }
}

// $db = new DB(); => OVO NE
$db = DB::getInstance();
