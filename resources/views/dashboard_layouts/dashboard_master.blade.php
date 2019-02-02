<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SmartTraining Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('assets/css/fontastic.css')}}" >
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('assets/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="{{asset('assets/img/dash/bb1.png')}}" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5">Smart Training</h2>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="#" class="brand-small text-center"> <strong>ST</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="{{url('dash')}}"> <i class="icon-home"></i>Home                             </a></li>
                <li><a href="{{url('dash/inscrit')}}"> <i class="icon-form"></i>Inscriptions</a></li>
                <li><a href="#exampledropdownDropdown1"  data-toggle="collapse"> <i class="icon-form"></i>Formation</a>
                    <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                        <li><a href="{{url('dash/formation/show')}}">Afficher</a></li>
                        <li><a href="{{url('dash/formation/Add')}}">Ajouter</a></li>
                    </ul>
                </li>
                <li><a href="#exampledropdownDropdown2"  data-toggle="collapse"> <i class="icon-form"></i> Realisation</a>
                    <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                        <li><a href="{{url('dash/realisation/show')}}">Afficher</a></li>
                        <li><a href="{{url('dash/realisation/Add')}}" >Ajouter</a></li>
                    </ul>
                </li>
                <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="icon-form"></i>Formateur </a>
                    <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                        <li><a href="{{url('dash/formateur/show')}}">Afficher</a></li>
                        <li><a href="{{url('dash/formateur/Add')}}">Ajouter</a></li>
                    </ul>
                </li>
              </ul>
</nav>
<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="{{url('/')}}" class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"><span>SmartTraining</span><strong class="text-primary">Dashboard</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Messages dropdown-->
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                @foreach( App\Message::all() as $message )

                                <li><a rel="nofollow" href="/dash/message/{{$message->id}}" class="dropdown-item d-flex">
                                        <div class="msg-body">
                                            <h3 class="h5">{{ $message->name_user }}</h3>
                                            <span>{{$message->message}}</span>
                                            <small> {{$message->created_at}} </small>
                                        </div></a>
                                </li>
                                    @endforeach

                            </ul>
                        </li>
                        <!-- Log out-->
                        <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
      @yield('content')
    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 text-right">
                    <p>Programmed by <a href="https://bootstrapious.com" class="external">younes chellaf</a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- JavaScript files-->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/charts-home.js')}}"></script>
<!-- Main File-->
<script src="{{asset('assets/js/front.js')}}"></script>
</body>
</html>
