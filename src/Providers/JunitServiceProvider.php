<?php
namespace Laszio\JunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
* 
*/
class JunitServiceProvider extends ServiceProvider
{
	
	public function register()
	{
		$this->registerRoutes();
		$this->loadViewsFrom(
			__DIR__.'/../../resources/views', 'laszio'
		);
	}

	public function boot()
	{

	}

	private function registerRoutes()
	{
		Route::group($this->routeConfiguration(), function(){
			$this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
		});
	}

	private function routeConfiguration()
	{
		return [
			'namespace' => 'Laszio\JunitLaravel\Http\Controller',
			'prefix' => 'laszio',
			'middleware'=> 'web',
		];
	}
}