<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class NodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('app/home');
    }


    /**
     * Display the content of the page
     *
     * @param $query
     * @return \Illuminate\View\View
     */
    public function display($query)
    {
        $title = 'TestView';
        $page= "";
        $arr = explode('/', $query);
        // \App\Page::find(4)->content->find(5)->element->module->name
        $heading = \App\Node::findBySlug('header');


//        dd(\App\Node::findBySlug($arr[0])->content);
        // test
        $content =  \App\Node::active()->findBySlug($arr[0])->content;


        foreach ($content as $item)
        {

            // get the module Name of
//            $module = \App\Module::findOrFail($p->module_id);

            // resolve the Module Name out of the IOC Container and render the content partiall
//            $content .= App::make('module:' . $module->name)->render($p->content_id);

//            foreach ($item->content as $content)
//            {
                //Todo check if Module is Active and Content is Active
                $module = $item->element->module->name;
                if($module!= 'Heading') continue;
                // resolve the Module out of the IOC Container and render the partial
                $page .= App::make('module:' . strtolower($module))->render($item->element->row);
//            }
        }

        return view('layout.master', compact('title', 'page'));
    }




}
