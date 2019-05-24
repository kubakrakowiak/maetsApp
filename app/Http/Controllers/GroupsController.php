<?php

namespace App\Http\Controllers;

use App\group;
use App\user_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupsController extends Controller
{
    public function addGroup(){
        $data = request()->validate([
            'name'  => 'required|min:3|unique:groups',
            'desc_groups' => 'required|min:10',
        ]);

        group::create($data);
        return back();
    }


    public function groupsList(){

        $groups = group::paginate(10);
        return view('admin_dash.groups',[
            'groups'=>$groups,
        ]);

    }

    public function groupsListPublic(){

        $groups = group::paginate(10);
        return view('groups',[
            'groups'=>$groups,
        ]);

    }
    public function groupProfile($groupid){
        $group = group::where('id',$groupid)->get();
        $have = user_group::where('user_id','=',Auth::user()->id)->where('group_id','=',$groupid)->count();
        return view('groupprofile',[
            'group' => $group,
            'have' => $have,
        ]);

    }

}
