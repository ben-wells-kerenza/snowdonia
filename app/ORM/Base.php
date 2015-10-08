<?php namespace App\ORM;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Base extends Model {
    
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
