<?php

namespace App\ORM;

/**
 * Model for Game
 *
 * @author Benjamin Wells Kerenza <bj.wells@ntlworld.com>
 */
class Game extends Base {
    
    public function users()
    {
        return $this->belongsToMany('App\ORM\User');
    }
}
