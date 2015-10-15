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

    /**
     * The Service Provider of the current Module
     *
     * @var null
     */
    private $moduleServiceProvider  = null;

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
        $this->app->singleton('module:provider', function($app) {
            return $this;
        });
    }

    /**
     * Render preview Model content
     *
     * @param $module_id
     * @param $moduleServiceProvider_id
     * @return mixed
     */
    public function preview($module_id, $moduleServiceProvider_id)
    {
        $this->isModule($module_id);

        return $this->moduleServiceProvider->preview($moduleServiceProvider_id);
    }


    public function create($module_id)
    {
        $this->isModule($module_id);

        return $this->moduleServiceProvider->create();
    }

    public function store($data, $node_id)
    {
        $this->isModule($data['module']);

//        $elem = \App\moduleServiceProvider::
//        dd($data, $node_id);
        $store =  $this->moduleServiceProvider->create($data);
        return redirect()->back();

    }


    public function rules($module_id)
    {
        $this->isModule($module_id);

        return $this->moduleServiceProvider->rules();
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

            $this->moduleServiceProvider = App::make('module:' . strtolower($this->module->name));
        }
    }


}
