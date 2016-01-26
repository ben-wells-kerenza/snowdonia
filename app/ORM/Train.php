<?php namespace App\ORM;

class Train extends Base {

    protected $casts = [
	'power' => 'array',
	'cost' => 'array',
	'supplies' => 'array',
	'worker' => 'bool',
	'worker_cost' => 'array',
    ];
    
    public function game_type()
    {
    	return $this->belongsToMany('App\ORM\Game\Type', 'train_types');
    }

}
