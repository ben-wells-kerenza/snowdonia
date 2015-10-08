<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getNew()
	{
            return view('game.new');
	}

	/**
	 * Process the new request for a game.
	 *
	 * @return Response
	 */
        public function postNew(Request $request)
        {
            return view('game.new');
            dd($request->input('no_players'));
        }
}