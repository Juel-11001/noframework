<?php

use App\Core\App;
use League\Container\Container;
use Spatie\Ignition\Ignition;


//stop default error reporting php:
error_reporting(0);

require '../vendor/autoload.php';

Ignition::make()->register();

//setup container
$container=new Container();
// $container->add('name', function (){
// 	return 'jewel';
// });
// var_dump($container->get('name'));
$app = new App();


//register route


$app->run();
