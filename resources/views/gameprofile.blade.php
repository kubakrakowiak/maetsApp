@extends('layouts.app')

@section('head')
    <style>
    .container-fluid{
    padding: 0;
    }
    header{
    background-color: rgb(0, 15, 27);
    color: #fff;
    }
    .game-logo{
    margin-top: -150px;
    }
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
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
                <div class="col-9">
                    <h1 class="display-2">{{$gameprofile[0]->name}}  <button class="btn btn-success tooltip" disabled>Kup Teraz  <span class="tooltiptext">Coming Soon</span></button></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">DLCs</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Players</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Comments</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            {{$gameprofile[0]->desc_games}}
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h1>Dlc dostępne w pakiecie:</h1>
                            <ul>
                                @foreach($dlcs as $dlc)
                                    <li><h1>{{$dlc->name}}</h1></li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            ..
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            ..
                        </div>

                    </div>
                </div>
            </div>
    </div>
@endsection
