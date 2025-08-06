<?php


use App\Providers\AppServiceProvider;
use App\Providers\RequestServiceProvider;
use App\Providers\RouterServiceProvider;

return [
	'name' => env('APP_NAME'),

	'debug'=>env('APP_DEBUG'),

	'providers'=>[
		AppServiceProvider::class,
		RequestServiceProvider::class,
		RouterServiceProvider::class,
	]
];