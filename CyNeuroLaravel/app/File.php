<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';

	public function job_file()
    {
        return $this->hasMany('App\Job_file');
    }
}
