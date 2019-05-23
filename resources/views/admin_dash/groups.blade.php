
@extends('admin_dash.dashboard_layout')

@section('content')
    <h1 class="text-center">MAETS GROUPS</h1>
    <div class="d-flex justify-content-center">

        <table class="table col-11">
            <thead class="thead-light">
            <tr>
                <th>
                    Group name
                </th>

                <th>
                    More
                </th>
                <th>
                    Group name
                </th>

                <th>
                    More
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($groups as $group)
                <tr>
                    <td>{{$group->name}}</td><td><button type="button" class="btn btn-info">Sprawdz Grupę</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">{{ $groups->links() }}</div>
@endsection
