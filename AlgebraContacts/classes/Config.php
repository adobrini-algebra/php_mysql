<?php

class Config{

    public static function get($path = null){

        if($path){
            $items = require "config/$path.php";
            return $items;
        }
        return false;
    }
    /*
    public static function get($path = null){

        //'database.mysql.user'
        if($path){
            $path_array = explode('.', $path);

            foreach ($path_array as $key => $value) {
                if ($key !== 0) {
                    $items = $items[$value];
                }else{
                    $items = require "config/$value.php";
                }                
            }
            return $items;
        }
        return false;
    }
    */
/*
    public static function get($path = null){

        //'database.mysql.user.name'
        if($path){
            $path_array = explode('.', $path);
            $count = substr_count($path, '.')
            $items = require "config/$path_array[0].php";

            switch ($count) {
                case 1:
                    $items = $items[$path_array[1]];
                    break;
                case 2:
                    $items = $items[$path_array[1]$path_array[2]];
                    break;
                
                default:
                    # code...
                    break;
            }
            
            return $items;
        }
        return false;
    }
    */
}