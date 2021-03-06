<?php

namespace App\Http\Controllers;

use App\User;
use App\game;
use App\user_game;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function userslist(){
        $userslist = User::paginate(10);

        return view('userslist',[
            'userslist'=>$userslist,
        ]);
    }
    public function getUser($userid){
        $userprofile = User::where('id',$userid)->get();
        $games_count = User::find($userid)->games()->where('user_id','=',$userid)->count();

        return view('userprofile',[
           'userprofile' => $userprofile,
           'games_count' => $games_count,
           ]);
    }
    public function userslistAdmin(){
        $userslist = User::paginate(10);

        return view('admin_dash.users',[
            'userslist'=>$userslist,
        ]);
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/dashboard/users');
    }

    public function buyGame($idgame, $iduser){
        $user=User::find($iduser);
        $user->Games()->syncWithoutDetaching([$idgame]);
        //$user->Games()->attach($idgame);
        return back();
    }

    public function joinGroup($idgroup, $iduser){
        $user=User::find($iduser);
        $user->groups()->syncWithoutDetaching([$idgroup]);
        //$user->Games()->attach($idgame);
        return back();
    }
}
