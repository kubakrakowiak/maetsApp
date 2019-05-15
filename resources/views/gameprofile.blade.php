@extends('layouts.app')

@section('head')
    <style>
    .container-fluid{
    padding: 0;
    }

    .jumbotron{
    background-color: rgb(0, 15, 27);
    }
    header{
    background-color: rgb(0, 15, 27);
    color: #fff;
    }

    #content-bg{
    background-color:rgb(19, 21, 27);
    }

    #desc{
    color: #fff;
    margin-top: 20px;
    font-size-adjust: 0.58;
    }

    .game-logo{
    margin-top: -150px;
    }

    .game-bg{
    /*width: 100vw;*/
    height: 30vh;
    background-color: #fff;
    background-image: url('/imgdefault-game-bg.png');
    background-repeat: no-repeat;
    background-size: 100vw 30vh;
    }
    </style>
@endsection

@section('bg')
    <img src="{{ asset('img/gamebg.png') }}" width="100%" height="auto">
@endsection

@section('content')
    <div class="container-fluid my-0">
            <div class="row">
                <div class="col-3 py-4 px-0 pl-4">
                    <img src="{{ asset('img/gameavatar.png') }}" style="border-radius: 8px" alt="" width="90%" class="rounded-lg game-logo">
                </div>
            </div>
    </div>
@endsection
