@extends('dashboard_layouts.dashboard_master')
@section('content')
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">   Voici les formateurs disponibles       </h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <table class="table table-hover table-dark">
                            <thead>
                            <tr>
                                <th scope="col">La formation</th>
                                <th scope="col"></th>
                                <th scope="col">modifier</th>
                                <th scope="col">supprimer </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(App\Realisation::all() as $realisation)
                                <tr>
                                    <td>{{$realisation->title}}</td>
                                    <td></td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$realisation->id}}1">Modifier</button></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$realisation->id}}">Supprimer</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    @foreach(\App\Realisation::all() as $realisation)
        <div class="modal fade" id="{{$realisation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attention !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Voulez vous supprimer la realisation {{$realisation->title}} realisé en  {{$realisation->date_realisation}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <a href="delete/{{$realisation->id}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@foreach(\App\Realisation::all() as $realisation)
<div class="modal fade" id="{{$realisation->id}}1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modofier vos realisation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/dash/realisation/update/{{$realisation->id}}"  method="POST"  enctype="multipart/form-data" class="form-horizontal">
                    {!! csrf_field()!!}
                    <div class="form-group">
                        <label class="col-form-label">titre:</label>
                        <input name="titre" type="text" class="form-control" id="recipient-name" value="{{$realisation->title}}">
                    </div>
                    <div class="form-group">
                        <label  class="col-form-label">description</label>
                        <input name="description" type="text" class="form-control" id="recipient-name" value="{{$realisation->description}}">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">date de realisation:</label>
                        <input name="date_r" type="date" class="form-control" id="recipient-name" value="{{$realisation->date_realisation}}">
                    </div>
                    <div class="form-group">
                        <label  class="col-form-label">image :</label>
                        <input  name="image" type="file" class="form-control" id="recipient-name" value="{{$realisation->photo}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
              </div>
            </div>
  </div>
</div>
@endforeach
@endsection
