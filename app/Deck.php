<?php

namespace App;

use Illuminate\Support\Collection;

/**
 * Deck class for shuffling and organising sets of cards
 *
 * @author Benjamin Wells Kerenza <bj.wells@ntlworld.com>
 */
class Deck
{
	
	const DRAW = 'draw';
	const DISPLAY = 'display';
	const DISCARD = 'discard';
	const CLAIM = 'claimed';
	
	const ALL = 'all';
	
    public static function create(Collection $cards, $decks = [], $shuffle = true)
    {
    	if ($shuffle)
    		$cards = $cards->shuffle();
    	
		$cards = collect([
		    static::DRAW => $cards,
		]);
		//discard a number of cards from the deck
		if (isset($decks[static::DISCARD]))
		    static::move($cards, $decks[static::DISCARD], static::DRAW);
		//display a number of cards from the deck
		if (isset($decks[static::DISPLAY]))
		    static::move($cards, $decks[static::DISPLAY], static::DRAW, static::DISPLAY);
		return $cards;
    }

    public static function move(Collection &$cards, $num = 1, $from = false, $to = false)
    {
    	if ($num === 0)
    		return;
    	
    	if ($num === static::ALL)
    	{
    		$num = $cards->get($from)->count();
    	}
    		
    	//sets the defaults
    	if (!$from)
    		$from = static::DRAW;
    	if (!$to)
    		$to = static::DISCARD;
    	
    	//check indexs exist
    	if (!($cards->get($from) instanceof Collection))
    		$cards->put($from, collect([]));
    	if (!($cards->get($to) instanceof Collection))
    		$cards->put($to, collect([]));
    	
    	$discarded = $cards->get($from)->splice(0, $num);
    	$cards->get($to)->splice($cards->get($to)->count(), 0, $discarded->all());
    	
    	return;
    }
    
    public static function serialize(Collection &$cards, $attr = false)
    {
    	$ary = [];
    	foreach($cards->keys() as $key)
    	{
    		$ary[$key] = $cards->get($key)->map(function($item, $key) use($attr){
    			switch($attr)
    			{
    				case true:
    					return $item->toJSON();
    				case false:
    					return $item->getAttribute($item->getKeyName());
    				default:
    					//TODO: Complete attribute selection
    					$attributes = collect($item->getAttributes());
    					return 'TODO';
    			}
    		})->toArray();
    	}
    	$cards = json_encode($ary);
    }
    
    public static function unserialize(&$cards, $model)
    {
    	if (!is_array($cards))
    		$cards = json_decode($cards, true);
    	foreach($cards as $key=>$item)
    	{
    		$model = new $model;
    		$ary = [];
    		foreach($item as $obj)
    		{
    			if (is_string($obj))
    				$obj = json_decode($obj, true);
    			if (is_int($obj))
    			{
    				$ary[] = $model::find($obj);
    			}
    			else
    				$ary[] = $model::find($obj[$model->getKeyName()]);
    		}
    		$cards[$key] = collect($ary);
    		
    	}
    	$cards = collect($cards);
    }
}
