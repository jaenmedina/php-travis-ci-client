<?php
require_once getcwd() . '/vendor/autoload.php';

spl_autoload_register(
    function ($class)
    {
        static $classes = NULL;
        static $path    = NULL;

        if ($classes === NULL) {
            $classes = array(
                'jaenmedina\PhpTravicCiClient\Entity\Repository' => '/src/Repository.php'
            );
            $path = dirname(__FILE__);
        }

        if (isset($classes[$class])) {
            require $path . $classes[$class];
        }
    }
);