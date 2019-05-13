@extends('layouts.app')

@section('content')
    <h1 class="pt-4">Profil użytkownika {{$userprofile[0]->name}}</h1>
    <div class="card card-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info-active">
            <div class="d-flex justify-content-center">
                <h3 class="widget-user-username">{{$userprofile[0]->name}}</h3>
            </div>
            <div class="d-flex justify-content-center">
                <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
        </div>
        <div class="widget-user-image">
            <div class="d-flex justify-content-center">
                <img class="img-circle elevation-2" src="https://png.pngtree.com/svg/20161212/f93e57629c.png" alt="User Avatar" width="200">
            </div>
        </div>
        <div class="card-footer">
            <div class="row pb-2">
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">GAMES</h5>
                        <span class="description-text">3,200</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">GROUPS</h5>
                        <span class="description-text">13,000</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">FRIENDS</h5>
                        <span class="description-text">35</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row border-top pt-2">
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">IMIE</h5>
                        <span class="description-text">{{$userprofile[0]->firstname}}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">NAZWISKO</h5>
                        <span class="description-text">{{$userprofile[0]->lastname}}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                    <div class="description-block">
                        <h5 class="description-header">DATA ZALOZENIA KONTA</h5>
                        <span class="description-text">{{$userprofile[0]->created_at}}</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
@endsection
