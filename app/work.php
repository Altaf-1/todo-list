<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'phone',
        'work',
        'start',
        'end'
    ];

}
