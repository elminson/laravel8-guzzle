<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app->singleton('GuzzleHttp\Client', function ()
		{

			return new Client([
								  'base_uri' => config('app.base_uri')
							  ]);
		});
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
