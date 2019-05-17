<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maets Admin Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        a{
            color: #fff;

        }

        a:hover{
            text-decoration: none;
        }
        .header{
            color: rgb(255, 196, 0);
            background-color: #333;
            border-bottom: 2px solid #ccc;
        }

        .nav-ul{
            list-style-type: none;
            padding: 0;
        }

        .nav-ul-li{
            border-bottom: 2px solid #ccc;
            width: 100%;
        }

        .nav-ul-li:hover{
            color: rgb(255, 196, 0);
        }

        .nav-ul-li:last-child{
            border-bottom: none;
        }

        .nav-bg{
            height: 81vh;
            background-color: #333;
            color: #fff;
        }

        .content{
            background-color: #eee;
        }

        img{
            width: 65%;
        }
    </style>


</head>
<body>
@if(Auth::user()->is_admin == '1')

    <header class="jumbotron jumbotron-fluid my-0 header">
        <div class="container text-left">
            <h4 class="display-4">
                MAETS Administration Dashboard
            </h4>
        </div>
    </header>

    <div class="row">
        @include('admin_dash.nav')
        <div class="col-6 col-sm-7 col-md-8 col-lg-9 col-xl-11 d-inline content text-center">
        @yield('content')
        </div>
    </div>
@else
        <header class="jumbotron jumbotron-fluid my-0 header">
            <div class="container text-left">
                <h1 class="lead">
                    Nie masz wystarczających uprawnień! Zapytaj o nie administratora systemu
                </h1>
            </div>
        </header>
@endif




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
