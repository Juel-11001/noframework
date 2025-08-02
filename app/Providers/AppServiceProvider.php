<?php

namespace App\Providers;

use App\Core\Example;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;
use Spatie\Ignition\Ignition;

class AppServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
	public function boot(): void
	{
		// @todo only do this when debug is enabled
		/**
		 * ignition work for showing php [like laravel] error msg :
		 */
		Ignition::make()->register();
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