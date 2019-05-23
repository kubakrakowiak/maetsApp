
@extends('admin_dash.dashboard_layout')

@section('content')
    <div class="container">
        <h1 class="text-center">MAETS GAMES</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-start">
                    <h6 class="m-0 font-weight-bold text-primary" style="display:inline;">New Game</h6>
                </div>
                <div class="d-flex justify-content-end" style="display:inline;">

                </div>
            </div>
            <div class="card-body">
                <form action="addgroup" method="POST">
                    <div class="input-group">
                        <div class="row">
                            <label for="name" class="pr-2">
                                Group Name
                            </label>
                            <div style="color: red;">{{$errors->first('name')}}</div>
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="desc_games" class="pr-2">
                                Group description
                            </label>
                            <div style="color: red;">{{$errors->first('desc_groups')}}</div>
                            <textarea type="text" name="desc_groups" id="desc_groups" class="form-control m-0"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Add Group</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
