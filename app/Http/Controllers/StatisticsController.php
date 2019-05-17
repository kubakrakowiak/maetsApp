<?php

namespace App\Http\Controllers;

use App\User;
use App\game;
use Illuminate\Http\Request;


class StatisticsController extends Controller
{
    public function getStats(){
        $allUsers = User::all()->count();
        $allGames = game::all()->count();
        return view('admin_dash.dashboard',[
            'allUsers' => $allUsers,
            'allGames' => $allGames,
        ]);
    }
}
