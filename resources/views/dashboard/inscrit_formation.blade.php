@extends('dashboard_layouts.dashboard_master')
@section('content')
    <section class="dashboard-counts section-padding">
        <div class="container-fluid">
            <header>
                <div class="row">
                <div class="col-xl-1">
                    <div class="wrapper count-title d-flex">
                    </div>
                </div>
                <div class="col-xl-5"><h1 class="h3 display">Voici les information de l'inscrit       </h1></div>
                </div>
            </header>
            <div class="row">
                <!-- Count item widget-->
                <div class="col-xl-3">
                    <div class="wrapper count-title d-flex">
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="name"><strong class="text-uppercase">{{$inscription->first_name}}</strong><span> first name </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="name"><strong class="text-uppercase">{{$inscription->last_name}}</strong><span> first name </span>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
            </div></br>
            <div class="row">
                <!-- Count item widget-->
                <div class="col-xl-3">
                    <div class="wrapper count-title d-flex">
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-clock"></i></div>
                        <div class="name"><strong class="text-uppercase">{{$inscription->date_birth}}</strong><span> first name </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-home"></i></div>
                        <div class="name"><strong class="text-uppercase">{{$inscription->wilaya}}</strong><span> first name </span>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
            </div></br>
            <div class="row">
                <!-- Count item widget-->
                <div class="col-xl-3">
                    <div class="wrapper count-title d-flex">
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-paper-airplane"></i></div>
                        <div class="name"><strong class="text-uppercase">{{$inscription->CCP}}</strong><span> first name </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="name"><strong class="text-uppercase">{{$inscription->CCP}}</strong><span> first name </span>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
            </div>
        </div>
    </section>
    <!-- Statistics Section-->
    <section class="statistics dashboard-counts">
        <div class="row">
            <div class="col-xl-3">
                <div class="wrapper count-title d-flex">
                </div>
            </div>
        <div class="col-xl-9 container-fluid">
            <div class="wrapper count-title d-flex" >
                <div class="icon"><i class="icon-check"></i></div>
                <div>
                    <strong class="text-uppercase">{{$inscription->motivation}}</strong>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection