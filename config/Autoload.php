<?php

class Autoloader
{
    static function register(){
        spl_autoload_register(array(__CLASS__,"autoload"));
    }

    static function autoload($class)
    {
        // echo $class;
        require_once "models/".$class.".php";
        if (file_exists("src/models/".$class."php")) {
            require_once"models/".$class.".php";
        }elseif
         (file_exists("src/Controller/".$class."php")) {
            require_once "src/Controller/".$class.".php";
        };
    }

};
Autoloader::register();

?>