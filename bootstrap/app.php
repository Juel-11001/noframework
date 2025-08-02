<?php

use App\Core\App;
use App\Core\Container;
use App\Providers\AppServiceProvider;
use League\Container\ReflectionContainer;


//stop default error reporting php:
error_reporting(0);

require '../vendor/autoload.php';


//setup container
// $container=new Container();
$container=Container::getInstance();
$container->delegate(new ReflectionContainer());
$container->addServiceProvider(new AppServiceProvider());

die();
$app = new App();


//register route


$app->run();
