<?php namespace App\ORM\Game;

use App\Deck as Deck;
use App\ORM\Base;
use App\ORM\Contract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Base {
	
	use SoftDeletes;
	
    protected $table = 'game_data';
    protected $primaryKey = 'game_id';
    protected $dates = ['deleted_at'];
    protected $casts = [
		'track_deck' => 'array',
    ];
    
    public function game()
    {
        return $this->belongsTo('App\ORM\Game');
    }
    
    public function getActionDeckAttribute($value)
    {
    	Deck::unserialize($value, 'App\ORM\Action');
    	return $value;
    }
    
    public function setActionDeckAttribute($value)
    {
    	Deck::serialize($value);
    	$this->attributes['action_deck'] = $value;
    }
    
    public function getContractDeckAttribute($value)
    {
    	Deck::unserialize($value, 'App\ORM\Contract');
    	return $value;
    }
    
    public function setContractDeckAttribute($value)
    {
    	Deck::serialize($value);
    	$this->attributes['contract_deck'] = $value;
    }
    
    public function getStationDeckAttribute($value)
    {
    	Deck::unserialize($value, 'App\ORM\Station');
    	return $value;
    }
    
    public function setStationDeckAttribute($value)
    {
    	Deck::serialize($value, true);
    	$this->attributes['station_deck'] = $value;
    }
    
    public function getStockDeckAttribute($value)
    {
    	Deck::unserialize($value, 'App\ORM\Resource');
    	return $value;
    }
    
    public function setStockDeckAttribute($value)
    {
    	Deck::serialize($value);
    	$this->attributes['stock_deck'] = $value;
    }
    
    public function getTrackDeckAttribute($value)
    {
    	$value = json_decode($value, TRUE);
    	$value = collect($value);
    	return $value;
    }
    
    public function setTrackDeckAttribute($value)
    {
    	$this->attributes['track_deck'] = json_encode($value->toArray());
    }
    
    public function getTrainDeckAttribute($value)
    {
    	Deck::unserialize($value, 'App\ORM\Train');
    	return $value;
    }
    
    public function setTrainDeckAttribute($value)
    {
    	Deck::serialize($value);
    	$this->attributes['train_deck'] = $value;
    }

}
