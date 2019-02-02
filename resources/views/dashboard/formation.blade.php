@extends('dashboard_layouts.dashboard_master')
@section('content')
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">   Voici les formations disponibles       </h1>
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
                            @foreach(App\Formation::all() as $formation)
                                <tr>
                                    <td>{{$formation->title}}</td>
                                    <td></td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$formation->id}}1">Modifier</button></a></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$formation->id}}">Supprimer</button></td>
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
    @foreach(\App\Formation::all() as $formation)
    <div class="modal fade" id="{{$formation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attention !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Voulez vous supprimer la formation {{$formation->title}} organisé par {{$formation->name_formateur}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <a href="delete/{{$formation->id}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @foreach(\App\Formation::all() as $formation)
    <div class="modal fade" id="{{$formation->id}}1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modofier votre formation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/dash/formation/update/{{$formation->id}}"  method="POST"  enctype="multipart/form-data" class="form-horizontal">
                        {!! csrf_field()!!}
                        <div class="form-group">
                            <label class="col-form-label">titre formation:</label>
                            <input name="title" type="text" class="form-control" id="recipient-name" value="{{$formation->title}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Description:</label>
                            <input name="description" type="text" class="form-control" id="recipient-name" value="{{$formation->description}}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nom formateur:</label>
                            <input name="nom_formateur" type="text" class="form-control" id="recipient-name" value="{{$formation->name_formateur}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Date debut:</label>
                            <input name="date_d" type="date" class="form-control" id="recipient-name" value="{{$formation->date_debut}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Date fin:</label>
                            <input name="date_f" type="date" class="form-control" id="recipient-name" value="{{$formation->date_fin}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Delai d'inscription :</label>
                            <input name="date_f_i" type="date" class="form-control" id="recipient-name" value="{{$formation->date_fin_inscription}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Tarif :</label>
                            <input name="tarif" type="text" class="form-control" id="recipient-name" value="{{$formation->tarif}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Photo de la formation :</label>
                            <input  name="photo_formation" type="file" class="form-control" id="recipient-name" value="{{$formation->image}}">
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