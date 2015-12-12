<?php
require_once getcwd() . '/vendor/autoload.php';

spl_autoload_register(
    function ($class)
    {
        static $classes = NULL;
        static $path    = NULL;

        if ($classes === NULL) {
            $classes = array(
                'jaenmedina\PhpTravisCiClient\Entity\Repository' => '/src/entities/Repository.php',
                'jaenmedina\PhpTravisCiClient\Entity\TravisEntity' => '/src/entities/TravisEntity.php',
                'jaenmedina\PhpTravisCiClient\Handler\RepositoryHandler' => '/src/handlers/RepositoryHandler.php',
                'jaenmedina\PhpTravisCiClient\Handler\TravisHandler' => '/src/handlers/TravisHandler.php'
            );
            $path = dirname(__FILE__);
        }

        if (isset($classes[$class])) {
            require $path . $classes[$class];
        }
    }
);