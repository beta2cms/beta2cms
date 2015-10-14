<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\SelectboxHelper;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ElementController extends Controller
{

    use SelectboxHelper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $node = \App\Node::findOrFail($id);

        $render = \App::make('module:render');
        return view('admin.element.index',compact('render','node'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $items = \App\Module::active()->get();
        $modules = SelectboxHelper::itemsToSelect($items);
        $render = \App::make('module:render');
        return view('admin.element.create', compact('render', 'modules', 'id'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $node_id)
    {
        $render = \App::make('module:render');
        $data = $request->all();
        $rules = $render->rules($data['module']);


        $validator = Validator::make($data, $rules);


        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $store = $render->store($request, $node_id);
        dd($store);
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




}
