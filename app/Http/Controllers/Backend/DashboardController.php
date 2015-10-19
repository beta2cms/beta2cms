<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Log::info('Dashboard is visited', ['name' => auth()->user()->fullname()]);
        $nodes = \App\Node::allDeleted()->get();
        return view('admin.index', compact('nodes'));
    }

}
