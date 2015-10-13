<?php namespace Modules\Assets\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class AssetsController extends Controller {
	
	public function index()
	{
		return view('assets::index');
	}
	
}