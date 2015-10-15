<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Data;
use App\Helpers\SelectboxHelper;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{

    use SelectboxHelper;
    use Data;

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

        //TODO
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = Data::checkActive($data);
        $data = Data::renameField($data, 'module', 'module_id');
//        dd($data);

        // Create Module
        $module = $this->provider->store($data);

        $data = Data::addField($data, 'row', $module['id']);

        //Create Element
        $elem_status = \App\Element::create($data)->save();

        $element_id = \App\Element::all()->last()->id;

        $data = Data::addField($data, 'node_id', $node_id);
        $data = Data::addField($data, 'element_id', $element_id);

        $content = \App\Content::create($data)->save();

        //todo: flash message
        return redirect()->route('admin.element.index', ['node' => $node_id ]);
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
