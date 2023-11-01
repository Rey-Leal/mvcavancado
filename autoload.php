<?php
$autoload = function ($class) {
    if (file_exists($class . '.php')) {
        include_once($class . '.php');
    } else {
        die('Classe ' . $class . ' não instanciada!');
    }
};

spl_autoload_register($autoload);