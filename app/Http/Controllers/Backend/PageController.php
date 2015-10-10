<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $main = \App\Page::findBySlug('main');

        return view('admin.page.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $parent = $request->get('parent');
        return view('admin.page.create', compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
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
        $exist =  \App\Page::findBySlug($data['slug'])->get()->toArray();
        if(!empty($exist))
        {
            //$appendix = '-1';
            dd($data,'change slug');
        }

        \App\Page::create($data)->save();
        // todo: include flash
//        flash()->success('New page created!');

        // todo: insert after logic


        return redirect()->route('admin.page.index');
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
     * Toggle active flag on resource
     * TODO: change to Ajax request
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleActive($id)
    {
        $page = \App\Page::find($id);
        $page->active = !boolval($page->active);
        $page->save();

        return redirect()->back();
    }
}
