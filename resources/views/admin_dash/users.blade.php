
@extends('admin_dash.dashboard_layout')

@section('content')
    <table class="table col-11">
        <thead class="thead-light">
        <tr>
            <th class="col-2">
                Nazwa Użytkownika
            </th>
            <th class="col-3">
                E-Mail
            </th>
            <th class="col-2">
                Data utworzenia konta
            </th>
            <th class="col-2">
                Opcje
            </th>
            <th class="col-2">
                Delete
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($userslist as $oneuser)
            <tr>
                <td class="col-2">{{$oneuser->name}}</td><td class="col-3">({{$oneuser->email}})</td><td class="col-2">{{$oneuser->created_at}}</td>
                <td class="col-2"><a href="/user/{{$oneuser->id}}"><button type="button" class="btn btn-info">Profil</button></a> <button type="button" class="btn btn-warning">Edytuj</button></td>
                <td class="col-2">
                        <form class="" method="post" action="/dashboard/users/{{$oneuser->id}}">
                            @csrf
                            @method('delete')
                            <button id="submit" name="submit" class="btn btn-danger">Usuń</button>
                        </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $userslist->links() }}
@endsection
