<?php

namespace App\Providers;

use App\Module;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class ModuleServiceProvider extends ServiceProvider
{


    /**
     * The Current used module
     *
     * @var null
     */
    private $module = null;

    private $element  = null;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('module:render', function($app) {
            return $this;
        });
    }

    /**
     * Render preview Model content
     *
     * @param $module_id
     * @param $element_id
     * @return mixed
     */
    public function preview($module_id, $element_id)
    {

        $this->isModule($module_id);

        return App::make('module:' . strtolower($this->module->name))->preview($element_id);
    }


    public function create($module_id)
    {
        $this->isModule($module_id);

        return App::make('module:' . strtolower($this->module->name))->create();
    }

    public function store($request)
    {
        $data = $request->all();

        $this->isModule($data['module']);

        dd($data);
        $store =  $this->element->create($request->all());
        dd($store);
    }

    public function edit($module_id)
    {

    }

    public function update($module_id, Request $request)
    {

    }

    public function destroy($module_id)
    {

    }

    /**
     * Check if the used Module is the current one
     *
     * @param $module_id
     */
    private function isModule($module_id)
    {
        if(!isset($this->module) || $this->module->id !== $module_id)
        {
            $this->module = Module::findOrFail($module_id);
            $this->element = App::make('module:' . strtolower($this->module->name));
        }


    }
}
