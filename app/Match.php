<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'playweek', 'time', 'playfield', 'class', 'team_a', 'team_b', 'team_ref',
    ];

}
