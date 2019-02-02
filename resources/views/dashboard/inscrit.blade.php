@extends('dashboard_layouts.dashboard_master')
@section('content')
    <section class="dashboard-counts section-padding">
        <div class="container-fluid">
        <div class="row">
            @foreach(\App\Formation::all() as $formation )
            <div class="col-xl-3">
                <div class="card card-body">
                    <strong class="text-primary">{{$formation->title}}</strong></br>
                    <span> </span>
                    <a href="{{url('dash/inscrit/'.$formation->id)}}"><button type="button" class="btn btn-info">Voir les inscrits</button></a>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection