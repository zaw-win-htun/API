<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';

    protected $fillable = [
    	'hero_name',
    	'hero_image',
    	'hero_overview',
    	'hero_detail'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function spells(){
    	return $this->hasMany('App\Spell');
    }
}
