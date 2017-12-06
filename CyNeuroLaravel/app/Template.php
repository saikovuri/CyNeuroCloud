<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
	protected $table = 'template';

	public function step()
    {
        return $this->hasMany('App\Step');
    }
}
