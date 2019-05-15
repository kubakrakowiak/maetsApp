<?php

namespace App\Http\Controllers;

use App\dlc;
use Illuminate\Http\Request;
use App\game;

class GamesController extends Controller
{
    public function addGame(){
        $data = request()->validate([
            'name'  => 'required|min:3|unique:games',
            'developer' => 'required|min:3',
            'publisher' => 'required|min:3',
            'price' => 'required|numeric',
            'desc_games' => 'required|min:10',
            'genre' => 'required|min:3',
        ]);

        game::create($data);
        return back();
    }
    public function gamesList(){

        $gamesList = game::paginate(10);
        return view('admin_dash.games',[
            'gamesList'=>$gamesList,
        ]);

    }
    public function gamesListPublic(){

        $gamesList = game::paginate(10);
        return view('gameslist',[
            'gamesList'=>$gamesList,
        ]);

    }
    public function gamesListToDlcs(){

        $gamesList = game::all();

        return view('admin_dash.adddlc',[
            'gamesList'=>$gamesList,
        ]);

    }
    public function getGame($gameid){
        $gameprofile = game::where('id_game',$gameid)->get();
        $dlcs = dlc::where('id_game',$gameid)->get();
        return view('gameprofile',[
            'gameprofile' => $gameprofile,
            'dlcs' => $dlcs,
            ]);
    }
}
