<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dlc extends Model
{
    protected $guarded = [];
    //
    public function game(){
        return $this->hasOne('App\game', 'id_game');
    }
}
