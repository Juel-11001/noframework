<?php

use App\Core\App;
use App\Providers\AppServiceProvider;
use League\Container\Container;
use Spatie\Ignition\Ignition;


//stop default error reporting php:
error_reporting(0);

require '../vendor/autoload.php';


//setup container
$container=new Container();
$container->addServiceProvider(new AppServiceProvider());

var_dump($container->get('name'));
die();
$app = new App();


//register route


$app->run();
