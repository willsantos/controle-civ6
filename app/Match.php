<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    protected $fillable = [

        'victory_type',
        'victory_player',
        'player_one_points',
        'player_two_points',
        'date_match'
    ];


}
