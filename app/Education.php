<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $fillable = [ 'school_name', 'school_location', 'degree', 'sy_start', 'sy_end'];
}
