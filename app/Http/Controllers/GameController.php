<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ORM\Game as Game;
use App\ORM\Game\Type as Game_Type;

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
    	return view('game.new', [
    		'game_types' => Game_Type::all(),
    	]);
	}

	/**
	 * Process the new request for a game.
	 *
         * @param Request $request  The form request
	 * @return Response
	 */
        public function postNew(Request $request)
        {
            $user = $request->user();
            $type = Game_Type::find($request->input('game_type_id'));
            $game = new Game();
            $game->no_players = $request->input('no_players');
            $game->creator()->associate($user);
            $game->type()->associate($type);
            $game->save();
            $game->users()->attach($user->id);
            return redirect()
                    ->action('GameController@getWaiting', [
                        'game' => $game->id,
                    ]);
        }

	/**
	 * Play the game.
	 *
	 * @return Response
	 */
	public function getPlay(Request $request, $game)
	{
		$game = Game::find($game);
        if (empty($game))
        	return redirect()
            	->action('GameController@getNew')
                ->withErrors(['game' => 'Try creating a new game.']);
        if (!$game->users()->where('id', $request->user()->id)->get()->count() != 0)
            return redirect()
            	->action('GameController@getNew')
        		->withErrors(['game' => 'You are not playing in game #'.$game.'.']);
		$game->setup();
		return view('game.play', [
			'game' => $game,
	    ]);
	}

	/**
	 * Waiting room for a game.
	 *
	 * @return Response
	 */
        public function getWaiting($game)
        {
            $game = Game::find($game);
            $users = $game->users;
            return view('game.waiting', [
                'game' => $game,
                'users' => $users,
            ]);
        }

	/**
	 * Update existing game settings.
	 *
	 * @return Response
	 */
        public function postWaiting(Request $request, $game)
        {
            $game = Game::find($game);
            if ($request->game_id != $game->id)
                abort(400, 'Game IDs do not match'); //400: Bad Request
            if (count($request->remove))
            {
                if ($game->creator == $request->user()->id)
                {
                    $game->users()->detach($request->remove);
                }
                else if (in_array($request->user()->id, $request->remove))
                {
                    $game->users()->detach($request->user()->id);
                }
            }
            return $this->getWaiting($game->id);
        }
}
