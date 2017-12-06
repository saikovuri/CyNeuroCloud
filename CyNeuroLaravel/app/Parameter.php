<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
	protected $table = 'parameter';

	public function job_parameter()
    {
        return $this->hasMany('App\Job_parameter');
    }
}
