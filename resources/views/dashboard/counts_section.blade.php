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
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="name"><strong class="text-uppercase">Nombre d'inscrits</strong><span>depuis debut</span>
                            <div class="count-number">{{$inscription->count()}}</div>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-padnote"></i></div>
                        <div class="name"><strong class="text-uppercase">Nombre de formations</strong><span>depuis debut</span>
                            <div class="count-number">{{$formation->count()}}</div>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="name"><strong class="text-uppercase">Nombre de formateurs</strong><span>depuis debut</span>
                            <div class="count-number">{{$formateur->count()}}</div>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-bill"></i></div>
                        <div class="name"><strong class="text-uppercase">Nombre de messages</strong><span>depuis debut</span>
                            <div class="count-number">{{$message->count()}}</div>
                        </div>
                    </div>
                </div>
                <!-- Count item widget-->
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="wrapper count-title d-flex">
                        <div class="icon"><i class="icon-list"></i></div>
                        <div class="name"><strong class="text-uppercase">Nombre de realisation</strong><span>depuis debut</span>
                            <div class="count-number">{{$realisation->count()}}</div>
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
              <!-- Income-->
                <div class="col-lg-6">
                    <div class="card income text-center">
                        <div class="icon"><i class="icon-line-chart"></i></div>
                        <div class="number">189000 DZD</div><strong class="text-primary">Revenus mensuel</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Monthly Usage-->
                    <div class="card data-usage">
                        <h2 class="display h4">Utilisation mensuel</h2>
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-6">
                                <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
                            </div>
                            <div class="col-sm-6"><strong class="text-primary">80.56 </strong><small>d'adherent accepté</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Section-->
    @endsection
