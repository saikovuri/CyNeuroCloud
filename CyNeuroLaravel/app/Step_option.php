<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step_option extends Model
{
	protected $table = 'step_option';

	public function file()
    {
        return $this->hasMany('App\File', 'step_option_id', 'id');
    }

	public function parameter()
    {
        return $this->hasMany('App\Parameter', 'step_option_id', 'id');
    }

	public function job()
    {
        return $this->hasMany('App\Job', 'step_option_id', 'id');
    }
    public function step()
    {
        return $this->belongsTo('App\Step', 'id', 'step_id');
    }
}
