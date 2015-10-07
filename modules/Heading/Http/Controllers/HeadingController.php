<?php namespace Modules\Heading\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class HeadingController extends Controller {
	
	public function index()
	{
		return view('heading::index');
	}
	
}