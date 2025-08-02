<?php

use App\Core\App;
use Spatie\Ignition\Ignition;

//stop default error reporting php:
error_reporting(0);

require '../vendor/autoload.php';

Ignition::make()->register();

//setup

$app = new App();


//register route


$app->run();
