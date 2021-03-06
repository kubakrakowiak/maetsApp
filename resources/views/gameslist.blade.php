@extends('layouts.app')

@section('content')
    <h1 class="pt-4">Game Base MaetsApp</h1>


    <table class="table">
        <thead class="thead-light">
        <tr>
            <th class="col-3">
                Game
            </th>
            <th class="col-3">
                Developer
            </th>
            <th class="col-3">
                publisher
            </th>
            <th class="col-1">
                Price
            </th>
            <th class="col-2">
                Others
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($gamesList as $onegame)
            <tr>
                <td>{{$onegame->name}}</td><td>({{$onegame->developer}})</td><td>{{$onegame->publisher}}</td><td>{{$onegame->price}}</td><td><a href="/game/{{$onegame->id}}"><button type="button" class="btn btn-info">Game Page</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $gamesList->links() }}






@endsection
