<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_group extends Model
{
    public function group(){
        return $this->hasMany(group::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    protected $guarded=[];
}
