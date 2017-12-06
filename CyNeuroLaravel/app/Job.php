<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job_file;
use App\Job_parameter;
use App\Execution;
use App\Step_option;
Use App\User;

class Job extends Model
{
	protected $table = 'job';

	public function job_file()
    {
        return $this->hasMany('App\Job_file', 'job__id', 'id');
    }

	public function job_parameter()
    {
        return $this->hasMany('App\Job_parameter', 'job_id', 'id');
    }

	public function execution()
    {
        return $this->hasMany('App\Execution', 'job_id', 'id');
    }

    public function step_option()
    {
        return $this->belongsTo('App\Step_option', 'step_option_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
