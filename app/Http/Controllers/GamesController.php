<?php

namespace App\Http\Controllers;

use App\dlc;
use App\User;
use App\user_game;
use App\game_comment;
use Illuminate\Http\Request;
use App\game;
use Illuminate\Support\Facades\Auth;

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
        $gameprofile = game::where('id',$gameid)->get();
        $dlcs = dlc::where('id_game',$gameid)->get();
        $have = user_game::where('user_id','=',Auth::user()->id)->where('game_id','=',$gameid)->count();
        $comments = game_comment::where('id_game',$gameid)->paginate(6);
        //$players = User::find(1)->games()->where('game_id','=',$gameid)->get();
        $players = game::find($gameid)->users()->where('game_id','=',$gameid)->paginate(15);
        $rate = game_comment::where('id_game','=',$gameid)->avg('rating');
        $ifcomment = 0;
        if (game_comment::where('id_game','=',$gameid)->where('user','=',Auth::user()->name)->count()>0)$ifcomment=1;
        return view('gameprofile',[
            'gameprofile' => $gameprofile,
            'dlcs' => $dlcs,
            'have' => $have,
            'players' => $players,
            'comments' => $comments,
            'rate'=>round($rate,2),
            'ifcomment'=>$ifcomment,
            ]);

    }
    public function addComment($gameid){
        $user = Auth::user();
        $data = request()->validate([
            'content' => 'required|min:10',
            'rating'  => 'required',
        ]);
        $data_full = ['user' => $user->name, 'content' => $data['content'], 'rating' => $data['rating'], 'id_game' => $gameid];
        game_comment::create($data_full);
        return back();
    }
}
