@extends('dashboard_layouts.dashboard_master')
@section('content')
    <section class="dashboard-counts section-padding">
        <div class="container-fluid">
            <div class="row">
                <!-- Count item widget-->
                <div class="col-xl-1">
                    <div class="wrapper count-title d-flex">
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="name"><strong class="text-uppercase">{{$message->name_user}}</strong><span>{{$message->mail_user}}</span>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
            </div>

        </div>
    </section>
    <!-- Statistics Section-->
    <section class="statistics">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-xl-1"></div>
                <div class="col-lg-12 col-xl-11">
                        <strong class="text-uppercase">{{$message->message}}</strong>
                </div>
            </div>
        </div>
    </section>
    <section class="dashboard-counts section-padding">
    <div class="container-fluid">
        <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-8">
                <div class="wrapper count-title d-flex">
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-6">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="icon-list"></i></div>
                    <div class="name"><span>{{$message->created_at}}</span>
                    </div>
                </div>
            </div>

            <!-- Count item widget-->
        </div>
    </div>
    </section>
@endsection