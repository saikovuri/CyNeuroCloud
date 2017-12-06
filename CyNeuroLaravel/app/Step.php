<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
	protected $table = 'step';

	public function step_option()
    {
        return $this->hasMany('App\Step_option');
    }
    public function template()
    {
        return $this->belongsTo('App\Template');
    }
}
