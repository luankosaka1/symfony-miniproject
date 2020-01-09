<?php

require(dirname(__DIR__)) . '/vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;

$fileLoader = new FileLocator([__DIR__]);
$loader = new YamlFileLoader($fileLoader);
$routes = $loader->load(dirname(__DIR__) . '/config/routes.yaml');
