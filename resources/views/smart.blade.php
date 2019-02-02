@extends('layouts.master')
@section('content')
<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Smart Training !</div>
            <div class="intro-heading text-uppercase">Le chemin éclairée</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Savoir plus</a>
        </div>
    </div>
</header>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Pourquoi nous !</h2>
                <h3 class="section-subheading text-muted">L'ecole professionelle Smart training vous offre </h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-users fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">La formation</h4>
                <p class="text-muted">L'école vous offre une formation complète de haute qualité avec des formateurs à l'échelle nationale dans differents domaines professionels demandé en Algerie .</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-money fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">Le tarif </h4>
                <p class="text-muted">On vous offre de formidables formations avec un prix moins cher pour assurer l'interet de notre jeneusse algerienne en lui progressant les possibilités de travail .</p>
            </div>
            <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-certificate fa-stack-1x fa-inverse"></i>
            </span>
                <h4 class="service-heading">La certification</h4>
                <p class="text-muted">La certificat offerte par notre école vous donne la possibilité de postuler vers des bons postes de travail grâce à notre bonne reputation  .</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nos formations disponible</h2>
                <h3 class="section-subheading text-muted">Vous pouvez chosir l'une de nos formidable fomation</h3>
            </div>
        </div>
        <div class="row">
        @foreach( App\Formation::all() as $formation )
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#{{$formation->id}}">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <div>
                    <img style="width:960px; height:250px" class="img-fluid" src="{{asset('assets/img/'.$formation->photo_name)}}" alt="">
                    </div>
                </a>
                <div class="portfolio-caption">
                    <h4>{{$formation->title}}</h4>
                    <p class="text-muted">{{$formation->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
     </div>
</section>

<!-- Realisation -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nos réalisations</h2>
                <h3 class="section-subheading text-muted">Les editions des formation les plus reussies </h3>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <ul class="timeline">
                <script>
                $({{$i=1}}).hide();
                </script>
                @foreach( \App\Realisation::all() as $realisation )
                    @if( $i % 2 == 1)
                        <li class="timeline">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{asset('assets/img/'.$realisation->photo_name)}}" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>{{$realisation->date_realisation}}</h4>
                            <h4 class="subheading">{{ $realisation->title }}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">{{$realisation->description}}</p>
                        </div>
                    </div>
                </li>
                    @else
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset('assets/img/'.$realisation->photo_name)}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{$realisation->date_realisation}}</h4>
                                    <h4 class="subheading">{{ $realisation->title }}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">{{$realisation->description}}</p>
                                </div>
                            </div>
                        </li>
                    @endif
                    <script>
                    $({{$i++}}).hide();
                    </script>
                @endforeach
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>Be Part
                            <br>Of Our
                            <br>Story!</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>

<!-- nos formateur  -->
<section class="bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nos formidable formateur</h2></br></br></br></br>
            </div>
        </div>
        <div class="row">
            @foreach( \App\Formateur::all() as $formateur )
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{asset('assets/img/'.$formateur->photo_name) }}" alt="">
                        <h4>{{$formateur->name}}</h4>
                        <p class="text-muted">{{$formateur->job}}</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="{{$formateur->facebook}} ">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$formateur->linkedIn}}">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{$formateur->Email}}">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
        </div>
    </div>
</section>
<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contacter Nous</h2></br></br></br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="/" method="POST">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="nom" class="form-control" id="name" type="text" placeholder="Votre Nom *" required data-validation-required-message="S'il vous plais entrer votre nom">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input name="mail" class="form-control" id="email" type="email" placeholder="Votre Email *" required data-validation-required-message="S'il vous plais entrer votre email">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input name="num" class="form-control" id="phone" type="tel" placeholder="Votre Numero *" required data-validation-required-message="S'il vous plais entrer votre telephone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" placeholder="Votre Message *" required data-validation-required-message="S'il vous plais entrer votre message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Modal 6 -->
@foreach( App\Formation::all() as $formation )
<div class="portfolio-modal modal fade" id="{{$formation->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">{{$formation->title}}</h2>
                            <img class="img-fluid d-block mx-auto" src="{{asset('assets/img/'.$formation->photo_name)}}" alt="" style="width:1000px;height: 400px">
                            <p>{{$formation->description}}</p>
                            <ul class="list-inline">
                                <li>Date Debut de formation : {{$formation->date_debut}}</li>
                                <li>Date fin de formation : {{$formation->date_fin}}</li>
                                <li>Avec nos formateur : {{$formation->name_formateur}}</li>
                                <li>Et d'un Tarif exceptionel pour vous : {{$formation->tarif}}</li>
                            </ul>


                            <a href="inscription/{{$formation->id}}"><button type="button" class="btn btn-warning">Postuler</button></a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Bootstrap core JavaScript -->
@endsection
