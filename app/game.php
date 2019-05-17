<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class game extends Model
{
    //
    protected $guarded = [];

    public function dlc(){
        return $this->belongsTo('App\dlc');
    }
    public function Users(){
        //return $this->belongsToMany(User::class)->using('App\user_game')->withTimestamps();;
        return $this->belongsToMany(User::class,'user_games')->withTimestamps();;
    }
    public function game_comments(){
        return $this->hasMany('App\game_comment');
    }
}
