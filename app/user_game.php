<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_game extends Model
{
    public function game(){
        return $this->hasMany(game::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    protected $guarded=[];
}
