<?php namespace Modules\Heading\Providers;

use App\Contracts\ModuleProviders\iModuleProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Modules\Heading\Entities\Heading;
use Modules\Heading\Http\Requests\HeadingRequest;
use Pingpong\Modules\Facades\Module;

class HeadingServiceProvider extends ServiceProvider implements iModuleProvider {

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
		$this->app->singleton('module:heading', function($app) {
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
	 * Render the preview partial of Heading
	 *
	 * @param $id
	 * @return mixed
	 */
	public function preview($id)
	{
		return view()->make('heading::preview', [
			'item' => Heading::findOrFail($id)
		]);
	}

	/**
	 * Render the create partial of Heading
	 *
	 * @return mixed
	 */
	public function create()
	{
		return view()->make('heading::create')->render();
	}


	/**
	 * @param $data
	 * @return null
     */
	public function store($data)
	{
		$success = Heading::create($data)->save();
		$item = Heading::all()->last()->id;
		//todo log

		return [
			'success' => $success,
			'id' => $item
		];
	}

	/**
	 * Return Module Validation
	 *
	 * @return HeadingRequest
	 */
	public function rules()
	{
		$request = new HeadingRequest();
		return $request->rules();

	}

	/**
	 * Edit entry by given id
	 *
	 * @param $id
	 * @return mixed
	 */
	public function edit($id)
	{
		return view()->make('heading::edit', [
			'item' => Heading::findOrFail($id)
		])->render();
	}

	/**
	 * Update entry by given id
	 *
	 * @param $data
	 * @param $id
	 * @return mixed
	 * @internal param $request
	 */
	public function update($id, $data)
	{
		// TODO: Implement update() method.
	}

	/**
	 * Deletes the Entry
	 * Set the delete_at field
	 *
	 * @param $id
	 * @return mixed
	 */
	public function destroy($id)
	{
		// TODO: Implement destroy() method.
	}
}
