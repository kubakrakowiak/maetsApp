<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    //
    protected $guarded = [];

    public function dlc(){
        return $this->belongsTo('App\game');
    }

}
