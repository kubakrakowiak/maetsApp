
@extends('admin_dash.dashboard_layout')

@section('content')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>
                Game name
            </th>
            <th>
                Developer
            </th>
            <th>
                Gatunek
            </th>
            <th>
                Opcje
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($gamesList as $game)
            <tr>
                <td>{{$game->name}}</td><td>({{$game->developer}})</td><td>{{$game->genre}}</td><td><a href="/game/{{$game->id}}"><button type="button" class="btn btn-info">Sprawdz Gre</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $gamesList->links() }}
@endsection
