<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\SelectboxHelper;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{

    use SelectboxHelper;

    /**
     * The Module Service Provider
     * @var null
     */
    protected $provider = null;


    function __construct() {
        $this->provider = \App::make('module:provider');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $node = \App\Node::findOrFail($id);

        return view('admin.element.index', array(
            'provider' => $this->provider,
            'node' => $node
        ));
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

        return view('admin.element.create', array(
            'provider' => $this->provider,
            'modules' => $modules,
            'id' => $id
        ));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $node_id)
    {
        $data = $request->all();

        $rules = $this->provider->rules($data['module']);

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $store = $this->provider->store($data, $node_id);
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
