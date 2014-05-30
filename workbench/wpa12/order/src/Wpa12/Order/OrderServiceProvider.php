<?php namespace Wpa12\Order;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('wpa12/order');
		include __DIR__.'/../../routes.php';

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['order'] = $this->app->share(function($app)
		{
			return new Order;
		});

		$this->app->booting(function(){
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Order' , 'Wpa12\Order\Facades\Order');
		});

		// $this->app->booting(function(){
		// 	  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		// 	  $loader->alias('Order', 'Wpa12\Order\Facades\Order');
		// });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('order');
	}

}
