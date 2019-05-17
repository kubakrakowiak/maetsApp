<?php

namespace App\Http\Controllers;

use App\dlc;
use App\Http\Requests\DLCRequest;
use Illuminate\Http\Request;

class DlcsController extends Controller
{
    //

    public function adddlc(DLCRequest $request){
        dlc::create($request->all());
        return back();
    }
}
