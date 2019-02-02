@extends('layouts.master')
@section('content')
    <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Inscrivez vous dans notre formation </h2></br></br></br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="/inscription/{{$formation->id}}" method="POST">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                            <div class="form-group col-md-6">
                                <input name="nom" class="form-control" id="name" type="text" placeholder="Votre Nom *" required data-validation-required-message="S'il vous plais entrer votre nom">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="prenom" class="form-control" id="name" type="text" placeholder="Votre Prenom *" required data-validation-required-message="S'il vous plais entrer votre prenom">
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                <input name="date_birth" class="form-control" id="name" type="date" placeholder="Votre Date de Naissance  *" required data-validation-required-message="S'il vous plais entrer votre date de naissance">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="wilaya" class="form-control" id="name" type="text" placeholder="Votre Wilaya ou vous habitez *" required data-validation-required-message="S'il vous plais entrer votre wilaya">
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-12">
                                <input name="CCP" class="form-control" id="email" type="text" placeholder="Votre compte CCP *" required data-validation-required-message="S'il vous plais entrer votre compte CCP">
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="Motivation" class="form-control" id="message" placeholder="Dit nous quelques chose *" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">S'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection