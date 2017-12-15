<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Job extends Model
{
	protected $table = 'job';

	public function job_file()
    {
        return $this->hasMany('App\Job_file');
    }

	public function job_parameter()
    {
        return $this->hasMany('App\Job_parameter');
    }

	public function execution()
    {
        return $this->hasMany('App\Execution');
    }

    public function step_option()
    {
        return $this->belongsTo('App\Step_option');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
