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
                            @foreach(App\Formateur::all() as $formateur)
                                <tr>
                                    <td>{{$formateur->name}}</td>
                                    <td></td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$formateur->id}}1">Modifier</button></a></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$formateur->id}}">Supprimer</button></td>
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
    @foreach(\App\Formateur::all() as $formateur)
        <div class="modal fade" id="{{$formateur->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attention !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Voulez vous supprimer le formateur {{$formateur->name}} ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <a href="delete/{{$formateur->id}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach(\App\Formateur::all() as $formateur)
    <div class="modal fade" id="{{$formateur->id}}1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modofier les informations de votre formateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/dash/formateur/update/{{$formateur->id}}"  method="POST"  enctype="multipart/form-data" class="form-horizontal">
                        {!! csrf_field()!!}
                        <div class="form-group">
                            <label class="col-form-label">nom formateur:</label>
                            <input name="nom_formateur" type="text" class="form-control" id="recipient-name" value="{{$formateur->name}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">profession:</label>
                            <input name="profession" type="text" class="form-control" id="recipient-name" value="{{$formateur->job}}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">biographie:</label>
                            <input name="biographie" type="text" class="form-control" id="recipient-name" value="{{$formateur->biographie}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Email:</label>
                            <input name="email" type="date" class="form-control" id="recipient-name" value="{{$formateur->Email}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Facebook:</label>
                            <input name="facebook" type="date" class="form-control" id="recipient-name" value="{{$formateur->facebook}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">LinkedIn :</label>
                            <input name="linkedin" type="date" class="form-control" id="recipient-name" value="{{$formateur->linkedIn}}">
                        </div>
                        <div class="form-group">
                            <label  class="col-form-label">Photo du formateur :</label>
                            <input  name="photo_formateur" type="file" class="form-control" id="recipient-name" value="{{$formateur->photo}}">
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
