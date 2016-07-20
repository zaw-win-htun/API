<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    protected $table = 'spells';

    protected $fillable = [
        'hero_id',
    	'spell_name',
    	'spell_image',
    	'spell_overview'
    ];

    protected $hidden = ['created_at', 'updated_at', 'id'];

    public function heroes(){
    	return $this->belongTo('App\Hero');
    }
}
