<?php namespace Paoloumali\Options;

use Illuminate\Support\ServiceProvider;

class OptionsServiceProvider extends ServiceProvider {

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
		$this->package('paoloumali/options', 'opt');
		include __DIR__.'/../../form_macros.php';
		include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerServices();
		$this->bindServices();
		$this->setupMainService();
	}

	// allows you to changes services here
	private function registerServices()
	{
		$this->app['opt.model'] = $this->app->share(function($app)
		{
			return new OptionModel();
		});

		$this->app['opt.repo'] = $this->app->share(function($app)
		{
			return new Repos\EloquentOptionRepo($app['opt.model']);
		});
	}

	private function bindServices()
	{
		$this->app->bind('OptionModel', function($app)
		{
			return $app['opt.model'];
		});

		$this->app->bind('OptionRepo', function($app)
		{
			return $app['opt.repo'];
		});
	}

	private function setupMainService()
	{
		$this->app['opt'] = $this->app->share(function($app)
		{
			return new Opt($app['opt.repo']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('opt', 'opt.model', 'opt.repo');
	}

}
