<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Smart Training est le site officiel de l'ecole de formation smart training pour annoncer les formation disponible ">
    <meta name="author" content=""><title>smart training</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <link href="{{ asset('assets/css/agency.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Smart Training</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Formations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Realisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">formateur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div><span class="copyright">Copyright &copy; Smart Training</span></div>
                <div><span>2018</span></div>
            </div>
            <div class="col-md-3">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/Smart-Training-687345284722586/?hc_ref=ARRLshJ_cAaqvcXYLzqjR0eRA4joW6I5wwHccAl7s1cBqi3M1TyMrZ1I0E6lSAuB00g" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/smart_training12/?hl=fr" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5">
                <div ><span class="copyright">Tel : 0662932217       </span></div>
                <div ><span class="copyright">Mail : smart2011training@gmail.com       </span></div>

            </div>

        </div>
    </div>
</footer>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin JavaScript -->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!-- Contact form JavaScript -->
<script src="{{asset('assets/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('assets/js/contact_me.js')}}"></script>
<!-- Custom scripts for this template -->
<script src="{{asset('assets/js/agency.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
