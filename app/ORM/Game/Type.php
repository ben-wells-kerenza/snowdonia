<?php namespace App\ORM\Game;

use App\Deck as Deck;
use App\ORM\Base;
use App\ORM\Resource;

class Type extends Base
{

	protected $table = 'game_types';
	
	/**
	 * @var array $track	Available track lengths in the game
	 */
	protected $track = [
		2, 2, 2,
		3, 3, 3, 3, 3,
		4, 4, 4, 4,
		5, 5,
	];
	
	public function actions()
	{
		return $this->belongsToMany('App\ORM\Action', 'action_types');
	}
	
	public function contracts()
	{
		return $this->belongsToMany('App\ORM\Contract', 'contract_types');
	}
	
	public function stations()
	{
		return $this->belongsToMany('App\ORM\Station', 'station_types');
	}
	
	public function trains()
	{
		return $this->belongsToMany('App\ORM\Train', 'train_types');
	}
    
    public function getActions($players)
    {
    	return Deck::create($this->actions()
		    		->players($players)
    				->orderBy('phase_letter')->get(), [
    			Deck::DISPLAY => Deck::ALL,
    		], false);
    }

    public function getContracts($players)
    {
		return  Deck::create($this->contracts()->players($players)->get(), [
			Deck::DISCARD => 0,
			Deck::DISPLAY => 3,
	    ]);
    }

    public function getStations($players)
    {
		return Deck::create($this->stations()
	    		->players($players)
	    		->orderBy('position')->get(), [
			Deck::DISPLAY => Deck::ALL,
	    ], false);
    }
    
    public function getStock($players)
    {
    	$display = [];
    	for ($i = 0; $i < 7; $i++)
    		$display[] = Resource::find(1);
    	for ($i = 0; $i < 4; $i++)
    		$display[] = Resource::find(2);
    	$display[] = Resource::find(3);
    	$ary = [];
    	switch ($players)
    	{
    		case 1:
		   		for ($i = 0; $i < 16; $i++)
		   			$ary[] = Resource::find(1);
		   		for ($i = 0; $i < 10; $i++)
		   			$ary[] = Resource::find(2);
		   		for ($i = 0; $i < 6; $i++)
		   			$ary[] = Resource::find(3);
		   		for ($i = 0; $i < 4; $i++)
		   			$ary[] = Resource::find(6);
    			break;
    		case 2:
    			//resources the same a for 3 player
    		case 3:
		   		for ($i = 0; $i < 20; $i++)
		   			$ary[] = Resource::find(1);
		   		for ($i = 0; $i < 11; $i++)
		   			$ary[] = Resource::find(2);
		   		for ($i = 0; $i < 14; $i++)
		   			$ary[] = Resource::find(3);
		   		for ($i = 0; $i < 5; $i++)
		   			$ary[] = Resource::find(6);
    			break;
    		case 4:
		   		for ($i = 0; $i < 27; $i++)
		   			$ary[] = Resource::find(1);
		   		for ($i = 0; $i < 16; $i++)
		   			$ary[] = Resource::find(2);
		   		for ($i = 0; $i < 14; $i++)
		   			$ary[] = Resource::find(3);
		   		for ($i = 0; $i < 5; $i++)
		   			$ary[] = Resource::find(6);
    			break;
    		case 5:
    			//defaulting to 5 player levels
    		default:
		   		for ($i = 0; $i < 33; $i++)
		   			$ary[] = Resource::find(1);
		   		for ($i = 0; $i < 20; $i++)
		   			$ary[] = Resource::find(2);
		   		for ($i = 0; $i < 14; $i++)
		   			$ary[] = Resource::find(3);
		   		for ($i = 0; $i < 5; $i++)
		   			$ary[] = Resource::find(6);
    			break;
    	}
    	$deck = Deck::create(collect($ary));
    	$deck->put(Deck::DISPLAY, collect($display));
    	return $deck;
    }
    
    public function getTrack()
    {
    	return collect($this->track)->shuffle();
    }

    public function getTrains()
    {
		
    	return Deck::create($this->trains, [
			Deck::DISCARD => 0,
			Deck::DISPLAY => 6,
	    ]);
    }

}
