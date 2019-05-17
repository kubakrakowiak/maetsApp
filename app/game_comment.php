<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_comment extends Model
{
    public function games(){
        return $this->belongsTo('App\game','id_game');
    }
}
