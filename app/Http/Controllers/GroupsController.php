<?php

namespace App\Http\Controllers;

use App\group;
use Illuminate\Http\Request;

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
}
