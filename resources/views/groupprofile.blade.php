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
            <div class="col-3 py-4 px-0 pl-4 d-inline">
                <img src="{{ asset('img/gameavatar.png') }}" style="border-radius: 8px" alt="" width="90%" class="rounded-lg game-logo">
            </div>
            <div class="col-3 py-4 px-0 pl-4 d-inline">
                <h1>{{$group[0]->name}}</h1>
                @if($have<1)
                    <form method="post" style="display: inline" action="/groups/{{$group[0]->id}}/join/{{ Auth::user()->id }}">
                        <div class="btn-group">
                        <button name="submit" class="btn btn-primary" disabled><i class="far fa-comment-dots"></i> Group Chat</button>
                        @csrf

                        <button name="submit" class="btn btn-success">Join Group</button>
                        </div>
                    </form>
                @else
                    <div class="btn-group">
                        <button name="submit" class="btn btn-primary"><i class="far fa-comment-dots"></i> Group Chat</button>
                        <button name="submit" class="btn btn-success" disabled>You are already in {{$group[0]->name}}</button>
                    </div>


                @endif

            </div>
        </div>
    </div>
@endsection
