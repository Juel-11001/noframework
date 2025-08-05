<?php

namespace App\Providers;

use App\Config\Config;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;
use Spatie\Ignition\Ignition;

class AppServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
	public function boot(): void
	{
		if($this->getContainer()->get(Config::class)->get('app.debug')){
			/**
			 * ignition work for showing php [like laravel] error msg :
			 */
			Ignition::make()->register();
		}

		// var_dump('app');
	}

	public function register(): void
	{
		// $this->getContainer()->add(Example::class, function (){
		// 	return new Example();
		// });
	}

	public function provides(string $id): bool
	{
		$services=[
			// Example::class
		];
		return in_array($id, $services);
	}
}