<?php namespace App\ORM;

use Illuminate\Database\Eloquent\Model;

class Weather extends Base {

	public function contracts()
	{
		$this->hasMany('App\ORM\Contract');
	}

}
