<?php

use App\Core\App;
use App\Core\Example;
use App\Core\View;
use App\Providers\AppServiceProvider;
use League\Container\Container;
use League\Container\ReflectionContainer;


//stop default error reporting php:
error_reporting(0);

require '../vendor/autoload.php';


//setup container
$container=new Container();
$container->delegate(new ReflectionContainer());
$container->addServiceProvider(new AppServiceProvider());

// $example=new Example (new View());
// var_dump($example);

var_dump($container->get(Example::class));
die();
$app = new App();


//register route


$app->run();
