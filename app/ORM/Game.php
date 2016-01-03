<?php

namespace App\ORM;

use App\Deck as Deck;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Model for Game
 *
 * @author Benjamin Wells Kerenza <bj.wells@ntlworld.com>
 */
class Game extends Base
{
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    public function actions()
    {
    	return $this->type->actions()
    		->where('min_player', '>=', $this->no_players)
    		->where('max_player', '<=', $this->no_players);
    }
    
    public function creator()
    {
        return $this->belongsTo('App\ORM\User', 'creator_id');
    }
    
    public function data()
    {
        return $this->hasOne('App\ORM\Game\Data');
    }
    
    public function type()
    {
    	return $this->belongsTo('App\ORM\Game\Type');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\ORM\User');
    }
    
    public function setup()
    {
        if ($this->data()->count())
            return $this;
		$data = new Game\Data();
		$data->action_deck = $this->getActions();
		$data->contract_deck = $this->getContracts();
		$data->station_deck = $this->getStations();
		$data->stock_deck = $this->getStock();
		$data->track_deck = $this->getTrack();
		$data->train_deck = $this->getTrains();
		$this->data()->save($data);
		$this->data = $data;
		
		return $this;
    }
    
    protected function getActions()
    {
		if (!count($this->data) || empty($this->data->action_deck))
		{
		    return $this->type->getActions($this->no_players);
		}
		else
		    return $this->data->action_deck;
    }

    protected function getContracts()
    {
		if (!count($this->data) || empty($this->data->contract_deck))
		{
		    return $this->type->getContracts($this->no_players);
		}
		else
		    return $this->data->contract_deck;
    }

    protected function getStations()
    {
		if (!count($this->data) || empty($this->data->station_deck))
		{
		    return $this->type->getStations($this->no_players);
		}
		else
		    return $this->data->station_deck;
    }
    
    protected function getStock()
    {
    	if (!count($this->data) || empty($this->data->stock_deck))
    	{
    		return $this->type->getStock($this->no_players);
    	}
    	else
    		return $this->data->stock_deck;
    }
    
    protected function getTrack()
    {
    	if (!count($this->data) || empty($this->data->track_deck))
    	{
    		return $this->type->getTrack();
    	}
		else
		    return $this->data->track_deck;
    }

    protected function getTrains()
    {
		if (!count($this->data) || empty($this->data->train_deck))
		{
		    return $this->type->getTrains();
		}
		else
		    return $this->data->train_deck;
    }
}
