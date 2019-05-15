<?php

namespace App\Http\Controllers;

use App\dlc;
use Illuminate\Http\Request;

class DlcsController extends Controller
{
    //

    public function adddlc(){
        //$data = request()->validate([
        //    'name'  => 'required|min:3',
        //    'desc_dlc' => 'required|min:3',
        //    'id_game' => 'required|min:3',
        //]);
        //dlc::create($data);
        dlc::create([
            'name' =>  request()->name,
            'desc_dlc' => request()->desc_dlc,
            'id_game' => request()->id_game,
        ]);
        return back();
    }
}
