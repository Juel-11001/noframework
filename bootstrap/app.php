<?php

use App\Config\Config;
use App\Core\App;
use App\Core\Container;
use App\Providers\AppServiceProvider;
use App\Providers\ConfigServiceProvider;
use League\Container\ReflectionContainer;


//stop default error reporting php:
error_reporting(0);

require '../vendor/autoload.php';


//setup container
// $container=new Container();
$container=Container::getInstance();
$container->delegate(new ReflectionContainer());
$container->addServiceProvider(new AppServiceProvider());
$container->addServiceProvider(new ConfigServiceProvider());


$config=$container->get(Config::class);

foreach ($config->get('app.providers') as $provider){
	$container->addServiceProvider(new $provider);
}


// dd($container->get(Config::class)->get('app.name'));
// dd($container->get(Config::class)->get('database.db'));
// die();

$app = new App();


//register route


$app->run();
