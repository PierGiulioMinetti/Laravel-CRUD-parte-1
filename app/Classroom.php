<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    /**
     *  gives attributes mass assignements
     */

    protected $fillable = [
        'name',
        'description'
    ];

}
