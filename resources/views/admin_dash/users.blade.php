
@extends('admin_dash.dashboard_layout')

@section('content')
    <h1 class="text-center">MAETS USERS</h1>
    <div class="d-flex justify-content-center">
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
                    <td class="col-2"><a href="/user/{{$oneuser->id}}"><button type="button" class="btn btn-info">Profile</button></a> <button type="button" class="btn btn-warning">Edit</button></td>
                    <td class="col-2">{{--<a class="dropdown-item" href="#{{$oneuser->id}}" data-toggle="modal" data-target="#delModal">Usun</a>--}}
                           <form class="" method="post" action="/dashboard/users/{{$oneuser->id}}">
                                @csrf
                                @method('delete')
                                <button id="submit" name="submit" class="btn btn-danger"><i class="fas fa-user-times pr-3"></i>Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">{{ $userslist->links() }}</div>
@endsection
