
@extends('admin_dash.dashboard_layout')

@section('content')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>
                Nazwa Użytkownika
            </th>
            <th>
                E-Mail
            </th>
            <th>
                Data utworzenia konta
            </th>
            <th>
                Opcje
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach ($userslist as $oneuser)
            <tr>
                <td>{{$oneuser->name}}</td><td>({{$oneuser->email}})</td><td>{{$oneuser->created_at}}</td>
                <td><a href="/user/{{$oneuser->id}}"><button type="button" class="btn btn-info">Profil</button></a> <button type="button" class="btn btn-warning">Edytuj</button>
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
