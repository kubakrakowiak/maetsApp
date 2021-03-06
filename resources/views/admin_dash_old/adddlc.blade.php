@extends('admin_dash.dashboard_layout')

@section('content')
    <form action="{{action('DlcsController@adddlc')}}" method="POST">
        <div class="input-group">
            <input type="text" name="name" class="form-control col-4">
            <div>{{$errors->first('name')}}</div>
            <input type="text" name="desc_dlc" class="form-control col-4">
            <div>{{$errors->first('desc_dlc')}}</div>
            <div class="form-group  col-4">
                <select class="form-control" name="id_game" id="id_game">
                    @foreach($gamesList as $game)
                    <option value="{{$game->id_game}}">{{$game->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input type="submit">Add Dlc</input>
        @csrf
    </form>
@endsection

