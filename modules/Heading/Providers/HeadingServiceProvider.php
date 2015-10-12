<?php namespace Modules\Heading\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Heading\Entities\Heading;

class HeadingServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the application events.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->registerConfig();
		$this->registerTranslations();
		$this->registerViews();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('module:heading', function($app) {
			return $this;
		});
	}

	/**
	 * Register config.
	 * 
	 * @return void
	 */
	protected function registerConfig()
	{
		$this->publishes([
		    __DIR__.'/../Config/config.php' => config_path('heading.php'),
		]);
		$this->mergeConfigFrom(
		    __DIR__.'/../Config/config.php', 'heading'
		);
	}

	/**
	 * Register views.
	 * 
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = base_path('resources/views/modules/heading');

		$sourcePath = __DIR__.'/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		]);

		$this->loadViewsFrom([$viewPath, $sourcePath], 'heading');
	}

	/**
	 * Register translations.
	 * 
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = base_path('resources/lang/modules/heading');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'heading');
		} else {
			$this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'heading');
		}
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	/**
	 * Render the View partial with given Content
	 *
	 * @param $id
	 * @return mixed
	 */
	public function render($id)
	{
		return view()->make('heading::index',[
			'item' => Heading::findOrFail($id)
		]);
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function preview($id)
	{
		return view()->make('heading::preview', [
			'item' => Heading::findOrFail($id)
		]);
	}

}
