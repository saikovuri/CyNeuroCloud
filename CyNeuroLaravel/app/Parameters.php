<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameters extends Model
{
     protected $fillable = array(
        'duration',
        'amplitude',
        'weight',
        'interval',
    );
}
