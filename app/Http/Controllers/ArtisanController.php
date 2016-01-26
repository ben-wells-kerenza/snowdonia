<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller {

	/*
	 |-------------------------------------
	 | Artisan Controller
	 |-------------------------------------
	 |
	 | This controller emulates the command line
	 | functions for use in a browser
	 |
	 */
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Run an Artisan command
	 *
	 * @return Response
	 */
	public function run(Request $request)
	{
    	$artisanRequest = $request->command.(!empty($request->operation)?':'.$request->operation:'');
    	echo $artisanRequest.'<br />'.PHP_EOL;
    	Artisan::call($artisanRequest);
    	echo 'Completed: '.$artisanRequest.'<br />'.PHP_EOL;
    	return '';
	}
}
