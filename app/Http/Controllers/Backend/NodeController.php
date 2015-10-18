<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\NodeRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class NodeController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $main = \App\Node::findBySlug('main');

        return view('admin.node.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $parent = $request->get('parent');
        return view('admin.node.create', compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NodeRequest $request)
    {
        $data = $request->all();

        // todo: move to helper method
        $data['active'] = !empty($data['active']);

        // check if slug is empty
        if(empty($data['slug']))
        {
            // create slug from name
            $data['slug'] = str_slug( $data['name'] );
        }

        // todo: create slug helper
        $exist =  \App\Node::findBySlug($data['slug'])->get()->toArray();
        if(!empty($exist))
        {
            //$appendix = '-1';
            dd($data,'change slug');
        }

        \App\Node::create($data)->save();
        // todo: include flash
//        flash()->success('New node created!');

        // todo: insert after logic


        return redirect()->route('admin.node.index');
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
        $node = \App\Node::find($id);
        return view('admin.node.edit', compact('node'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NodeRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(NodeRequest $request, $id)
    {
        \App\Node::find($id)->update($request->all());

        // todo: flash message

        return redirect()->route('admin.node.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $node = \App\Node::find($id);
        $node->deleted_at = \Carbon\Carbon::now()->toDateTimeString();
        $node->save();

        // todo: flash message

        //return redirect()->route('admin.node.index');
        return redirect()->back();
    }

    /**
     * Toggle active flag on resource
     * TODO: change to Ajax request
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggle($id)
    {
        $node = \App\Node::find($id);
        $node->active = !boolval($node->active);
        $node->save();

        return redirect()->back();
    }


    /**
     * Undo the deleted Element
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function undoDelete($id)
    {
        $node = \App\Node::find($id);
        $node->deleted_at = null;
        $node->active = false;
        $node->save();

        return redirect()->back();
    }
}
