@extends('layouts.app')

@section('content')
    <h1 class="pt-4">Maets Groups</h1>


    <table class="table">
        <thead class="thead-light">
        <tr>
            <th class="col-3">
                Group
            </th>
            <th class="col-3">
                Members
            </th>
            <th class="col-3">
                Others
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($groups as $group)
            <tr>
                <td>{{$group->name}}</td><td>1</td><td><a href="/groups/{{$group->id}}"><button type="button" class="btn btn-info">Game Page</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $groups->links() }}






@endsection
