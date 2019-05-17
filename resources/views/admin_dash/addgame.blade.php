
@extends('admin_dash.dashboard_layout')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-start">
                    <h6 class="m-0 font-weight-bold text-primary" style="display:inline;">New Game</h6>
                </div>
                <div class="d-flex justify-content-end" style="display:inline;">

                </div>
            </div>
            <div class="card-body">
                <form action="addgame" method="POST">
                    <div class="input-group">
                        <div class="row">
                            <label for="name" class="pr-2">
                                Game Name
                            </label>
                            <div style="color: red;">{{$errors->first('name')}}</div>
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="developer" class="pr-2">
                                Developer
                            </label>
                            <div style="color: red;">{{$errors->first('developer')}}</div>
                            <input type="text" name="developer" id="developer" class="form-control">
                            <label for="publisher" class="pr-2">
                                Publisher
                            </label>
                            <div style="color: red;">{{$errors->first('publisher')}}</div>
                            <input type="text" name="publisher" id="publisher" class="form-control">
                            <label for="price" class="pr-2">
                                Price
                            </label>
                            <div style="color: red;">{{$errors->first('price')}}</div>
                            <input type="text" name="price" id="price" class="form-control">
                            <label for="genre" class="pr-2">
                                Genre
                            </label>
                            <div style="color: red;">{{$errors->first('genre')}}</div>
                            <input type="text" name="genre" id="genre" class="form-control">
                            <label for="desc_games" class="pr-2">
                                Game description
                            </label>
                            <div style="color: red;">{{$errors->first('desc_games')}}</div>
                            <input type="text" name="desc_games" id="desc_games" class="form-control m-0">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Add Game</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

