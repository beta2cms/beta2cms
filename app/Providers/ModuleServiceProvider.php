<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class ModuleServiceProvider extends ServiceProvider
{
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

        $module = \App\Module::findOrFail($module_id);

        return App::make('module:' . strtolower($module->name))->preview($element_id);
    }


    public function create($module_id)
    {

    }

    public function store($module_id, Request $request)
    {

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
}
