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


    .rating-system3{
        width:auto;
        display:inline-block;
        margin:20px;
        position: relative;
    }

    input{
        display:none;
    }

    label{
        float:right;
        display:inline-block;
        width:20px;
        height:5px;
        background:#ccc;
        margin:4px;
        position: relative;
        transition:all .3s;
    }
    .rating-system1 label:before{
        content: '';
        position: absolute;
        width:100%;
        height:100%;
        background: inherit;
        top:0;
        left:0;
        transition:all 0.3s;
    }
    .rating-system1 input:checked ~ label,
    .rating-system1 label:hover ~ label,
    .rating-system1 label:hover{
        background:seagreen;
    }
    .rating-system1 input:checked ~ label:before{
        transform:rotate(90deg);
    }
    .text{
        color:#ccc;
        padding:10px 0;
        position: absolute;
        width:100%;
        top:100%;
    }
    /*second*/
    .rating-system2 label{
        width:10px;
        height:10px;
        border-radius:100%;
        margin:0 10px;
    }

    .ratings-system2 label:before{display:none;}
    .rating-system2 label:hover ~ label,
    .rating-system2 label:hover
    {
        box-shadow: 0 0 0 2px gold,
        inset 0 0 0 5px #333;

    }

    .rating-system2 input:checked ~ label{
        background:gold;
        box-shadow: 0 0 0 2px gold;

    }

    /*rating system 3*/

    .rating-system3 label{
        width:10px;
        height:10px;
        margin:0 10px;
    }
    .rating-system3 label:hover,
    .rating-system3 label:hover ~ label
    {
        background:crimson;
        border-radius:100%
    }

    .rating-system3 input:checked ~ label{
        border-radius: 100%;
        background: crimson;
        box-shadow: 6px 0 crimson, 3px 1px 0 7px #222,3px 1px 0 9px crimson;

    }

    .rating-system3 input:checked ~ label:after{
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        background: crimson;
        transform: rotate(-45deg);
        border-bottom-left-radius: 15%;
        top: 30%;
        left: 3px;
    }

    /** rating system 4*/

    .rating-system4 label{

        width:40px;
        height:50px;
        background:url('https://i.imgur.com/q1tk5E7.gif');
        background-size:70%;
        background-repeat:no-repeat;
    }


    .rating-system4 label:hover,
    .rating-system4 label:hover ~ label
    {
        background:url('https://i.imgur.com/YgAna9g.gif');
        background-size:100%;
        background-repeat:no-repeat;

    }


    .rating-system4 input:checked ~ label{
        background:url('https://i.imgur.com/GO4qjoa.gif');
        background-size:70%;
        background-repeat:no-repeat;

    }


    /*selecting*/
    input:nth-of-type(5):checked  ~ .text:before{
        content:"Not bad";
    }

    label:nth-of-type(5):hover  ~ .text:before{
        content:"Not bad"!important;
    }

    input:nth-of-type(4):checked  ~ .text:before{
        content:"Its Ok";
    }

    label:nth-of-type(4):hover  ~ .text:before
    {
        content:"Its Ok"!important;
    }


    input:nth-of-type(3):checked  ~ .text:before{
        content:"Good!";
    }

    label:nth-of-type(3):hover  ~ .text:before{
        content:"Good!"!important;
    }


    input:nth-of-type(2):checked  ~ .text:before{
        content:"Very Good!";
    }
    label:nth-of-type(2):hover  ~ .text:before{
        content:"Very Good!"!important;
    }

    input:nth-of-type(1):checked  ~ .text:before{
        content:"Awesome!!";
    }
    label:nth-of-type(1):hover  ~ .text:before{
        content:"Awesome!!"!important;
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
                    <h1 class="display-2">{{$gameprofile[0]->name}}
                        @if($have<1)
                        <form method="post" style="display: inline" action="/game/{{$gameprofile[0]->id}}/buy/{{ Auth::user()->id }}">
                            @csrf

                            <button name="submit" class="btn btn-success">Buy Now</button></h1>
                        </form>
                        @else
                            <button name="submit" class="btn btn-success" disabled>You already have {{$gameprofile[0]->name}}</button></h1>
                        @endif

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
                            <h1>Available dlcs in package:</h1>
                            <ul>
                                @foreach($dlcs as $dlc)
                                    <li><h1>{{$dlc->name}}</h1></li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="row pt-2">
                            @foreach($players as $player)

                                    <div class="col-sm-4 border-left border-top border-bottom border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">{{$player->name}}</h5>
                                            <span class="description-text">{{$player->email}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>

                            @endforeach

                            </div>
                            <div class="pt-5">{{ $players->links() }}</div>

                        </div>

                        <div class="tab-pane fade pb-2" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            @if($ifcomment==0)
                            <div class="col-sm-12 border-left border-top border-bottom border-right pt-2">
                                <h4 class="pl-4">Rate {{$gameprofile[0]->name}}</h4>
                                <form action="/game/{{$gameprofile[0]->id}}" method="post">
                                    <textarea type="text" name="content" id="content" class="form-control m-0 col-sm-9 ml-2"></textarea>
                                    <div class="rating-system3 col-sm-9">
                                        <div class="text"></div>
                                        <h3 class="d-inline">Give your Respect</h3>
                                        <input type="radio" name='rating' id="star5_3" class="mt-3" value="5"/>
                                        <label for="star5_3" class="mt-2"></label>

                                        <input type="radio" name='rating' id="star4_3" class="mt-3" value="4"/>
                                        <label for="star4_3" class="mt-2"></label>

                                        <input type="radio" name='rating' id="star3_3" class="mt-3" value="3"/>
                                        <label for="star3_3" class="mt-2"></label>

                                        <input type="radio" name='rating' id="star2_3" class="mt-3" value="2"/>
                                        <label for="star2_3" class="mt-2"></label>

                                        <input type="radio" name='rating' id="star1_3" class="mt-3" value="1"/>
                                        <label for="star1_3" class="mt-2"></label>


                                    </div>
                                    <button class="btn btn-primary float-right mt-4" type="submit">Send</button>
                                    @csrf

                                </form>
                            </div>
                            @endif
                            <div class="row m-0">
                                <div class="col-sm-12 border-left border-top border-bottom border-right">
                                <div class="float-left">Avg Rating</div> <div class="float-right">{{$rate}}</div>
                                </div>
                            </div>
                            @foreach($comments as $comment)
                            <div class="col-sm-12 border-left border-top border-bottom border-right">
                                <div class="description-block  py-3">
                                    <h4 class="description-header clearfix"><span class="float-left"> {{$comment->user}}</span><span class="float-right">{{$comment->created_at}}</span> </h4>

                                    <span class="description-text">{{$comment->content}}</span>
                                    <span class="description-text float-right">Rating: {{$comment->rating}}</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            @endforeach
                            <div class="pt-5">{{ $comments->links() }}</div>

                        </div>




                    </div>
                </div>
            </div>
    </div>
@endsection
