
@extends('admin_dash.dashboard_layout')

@section('content')
    <form action="addgame" method="POST">
        <div class="input-group">
            <input type="text" name="name" class="form-control">
            <div>{{$errors->first('name')}}</div>
            <input type="text" name="developer" class="form-control">
            <div>{{$errors->first('developer')}}</div>
            <input type="text" name="publisher" class="form-control">
            <div>{{$errors->first('publisher')}}</div>
            <input type="text" name="price" class="form-control">
            <div>{{$errors->first('price')}}</div>
            <input type="text" name="desc_games" class="form-control">
            <div>{{$errors->first('desc_games')}}</div>
            <input type="text" name="genre" class="form-control">
            <div>{{$errors->first('genre')}}</div>
        </div>
        <button type="submit">Add Game</button>
        @csrf
    </form>
@endsection

