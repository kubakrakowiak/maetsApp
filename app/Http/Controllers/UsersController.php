<?php

namespace App\Http\Controllers;

use App\User;
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

        return view('userprofile',['userprofile' => $userprofile]);
    }

}
