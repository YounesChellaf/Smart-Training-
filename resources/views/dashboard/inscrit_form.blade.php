@extends('dashboard_layouts.dashboard_master')
@section('content')
    <section class="dashboard-counts section-padding">
        <div class="container-fluid">
            <div class="row">
                @foreach(\App\Inscription::all() as $inscription )
                    @if ($inscription->formation_id == $formation->id)
                    <div class="col-xl-3">
                        <div class="card card-body">
                            <strong class="text-primary">{{$inscription->first_name}}</strong></br>
                            <span> </span>
                            <a href="{{url('dash/inscrit_formation/'.$inscription->id)}}"><button type="button" class="btn btn-info">Visualiser</button></a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection