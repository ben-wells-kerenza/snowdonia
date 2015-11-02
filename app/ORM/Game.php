<?php

namespace App\ORM;

/**
 * Model for Game
 *
 * @author Benjamin Wells Kerenza <bj.wells@ntlworld.com>
 */
class Game extends Base {
    
    public function creator()
    {
        return $this->belongsTo('App\ORM\User', 'creator');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\ORM\User');
    }
}
