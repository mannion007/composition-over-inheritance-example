<?php

/** Composer autolaoder */
require_once('vendor/autoload.php');

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/** Register dependency injection */
$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/config'));
$loader->load('services.yml');

echo 'Standard Tank' . PHP_EOL;
$standard = $container->get('standard-tank');
$standard->shoot();
$standard->drive();

echo PHP_EOL . 'Heavy Tank' . PHP_EOL;
$heavy = $container->get('heavy-tank');
$heavy->shoot();
$heavy->drive();

echo PHP_EOL . 'Hyper Tank' . PHP_EOL;
$hyper = $container->get('hyper-tank');
$hyper->shoot();
$hyper->drive();
