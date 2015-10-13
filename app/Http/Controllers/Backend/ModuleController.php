<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Module;
use Illuminate\Support\Facades\App;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::get();
        return view('admin.module.index',compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      //  $partial = App::make('module:render')->preview(1,1);
        $module = \App\Module::findOrFail($id);
        $partial = App::make('module:' . strtolower($module->name))->create(1);
        return response()->json(['partial'=> $partial,'name' => $module->name]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Toggles Modules between active and inactive.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggle($id)
    {
        $module = \App\Module::find($id);
        $module->active = !boolval($module->active);
        $module->save();

        return redirect()->back();
    }


}
