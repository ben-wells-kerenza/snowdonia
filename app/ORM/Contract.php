<?php namespace App\ORM;

class Contract extends Base {

    protected $casts = [
		'requirements' => 'array',
		'power' => 'array',
    ];
    
    public function game_type()
    {
    	return $this->belongsToMany('App\ORM\Game\Type', 'contract_types');
    }
    
    public function weather()
    {
        return $this->belongsTo('App\ORM\Weather');
    }
    
    public function scopePlayers($query, $players = 3)
    {
    	return $query->where('min_player', '<=', $players)->where('max_player', '>=', $players);
    }

}
