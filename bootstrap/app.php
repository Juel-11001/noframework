<?php

use App\Config\Config;
use App\Core\App;
use App\Core\Container;
use App\Providers\AppServiceProvider;
use App\Providers\ConfigServiceProvider;
use Dotenv\Dotenv;
use Laminas\Diactoros\Request;
use League\Container\ReflectionContainer;
use League\Route\Router;


//stop default error reporting php:
error_reporting(0);

require '../vendor/autoload.php';


//setup container
// $container=new Container();
$container=Container::getInstance();
$container->delegate(new ReflectionContainer());
$container->addServiceProvider(new AppServiceProvider());
$container->addServiceProvider(new ConfigServiceProvider());

//env
$dotenv=Dotenv::createImmutable(__DIR__. '/../');
$dotenv->load();

// dd($container->get(Config::class)->get('app.debug'));

$config=$container->get(Config::class);

foreach ($config->get('app.providers') as $provider){
	$container->addServiceProvider(new $provider);
}
// var_dump($container->get(Request::class)->getQueryParams());
// die();


// dd($container->get(Config::class)->get('app.name'));
// dd($container->get(Config::class)->get('database.db'));
// die();

$app = new App();


//register route
$router=$container->get(Router::class);
$router->get('/', function (){
	dd("home page");
});

$app->run();
