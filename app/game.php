<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class game extends Model
{
    //
    protected $guarded = [];

    public function dlc(){
        return $this->belongsTo('App\game');
    }
    public function Users(){
        //return $this->belongsToMany(User::class)->using('App\user_game')->withTimestamps();;
        return $this->belongsToMany(User::class,'user_games')->withTimestamps();;
    }

}
