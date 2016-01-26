<?php namespace App\ORM;

class Action extends Base
{
	
	public function game_type()
	{
		return $this->belongsToMany('App\ORM\Game\Type', 'action_types');
	}
    
    public function scopePlayers($query, $players = 3)
    {
    	return $query->where('min_player', '<=', $players)->where('max_player', '>=', $players);
    }
}
