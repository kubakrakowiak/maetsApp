
@extends('admin_dash.dashboard_layout')

@section('content')
    <h1 class="text-center">MAETS USERS</h1>
    <div class="d-flex justify-content-center">
        <table class="table col-11">
            <thead class="thead-light">
            <tr>
                <th class="">
                    Nazwa Użytkownika
                </th>
                <th class="">
                    E-Mail
                </th>
                <th class="">
                    Data utworzenia konta
                </th>
                <th class="">
                    Opcje
                </th>
                <th class="">
                    Delete
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach ($userslist as $oneuser)
                <tr>
                    <td class="">{{$oneuser->name}}</td><td class="">({{$oneuser->email}})</td><td class="">{{$oneuser->created_at}}</td>
                    <td class=""><a href="/user/{{$oneuser->id}}"><button type="button" class="btn btn-info">Profile</button></a> <button type="button" class="btn btn-warning">Edit</button></td>
                    <td class="">{{--<a class="dropdown-item" href="#{{$oneuser->id}}" data-toggle="modal" data-target="#delModal">Usun</a>--}}
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
