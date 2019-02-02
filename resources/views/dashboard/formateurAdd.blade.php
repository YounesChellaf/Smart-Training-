@extends('dashboard_layouts.dashboard_master')
@section('content')
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">   Ajouter votre Formation Ici        </h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>        Introduisez les information de votre formateur</h4>
                        </div>
                        <div class="card-body">
                            <form action="/dash/formateur/Add"  method="POST"  enctype="multipart/form-data" class="form-horizontal">
                                {!! csrf_field()!!}
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Nom</label>
                                    <div class="col-sm-10">
                                        <input name="nom_formateur" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Profession </label>
                                    <div class="col-sm-10">
                                        <input name="profession_formateur" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Biographie </label>
                                    <div class="col-sm-10">
                                        <input name="biographie_formateur" type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Email </label>
                                    <div class="col-sm-10">
                                        <input name="mail_formateur" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Facebook </label>
                                    <div class="col-sm-10">
                                        <input name="facebook_formateur" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">LinkedIn </label>
                                    <div class="col-sm-10">
                                        <input name="linkedin_formateur" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label"> Photo</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input name="photo_formateur" type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection