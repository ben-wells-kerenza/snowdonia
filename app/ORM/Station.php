<?php

namespace App\ORM;

class Station extends Base
{
    const EXCAVATE = 'excavation';
    const BUILD = 'building';
    
    protected $casts = [
		'spaces' => 'array',
	];
    protected $visible = [
    	'id',
    ];
    
    public $incrementing = false;
    
    public function game_type()
    {
    	return $this->belongsToMany('App\ORM\Game\Type', 'station_types');
    }
    
    public function scopePlayers($query, $players = 3)
    {
    	return $query->where('min_player', '<=', $players)->where('max_player', '>=', $players);
    }
}
