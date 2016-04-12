<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi BeaCukai</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    SPD Center
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                   
                    @role(1)
                     <li><a href="{{ url('/') }}">Home</a></li>
                     <li><a href="{{ url('/profil') }}">Profil</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Peraturan <span class="caret"></span>
                        <ul class="dropdown-menu" role="menu">                    
                            <li><a href="{{ url('/peraturanpd')}}">Perjalanan Dinas</a></li>
                            <li><a href="{{ url('/peraturanbp')}}">Bendahara Pengeluaran</a></li>
                            <li><a href="{{ url('/peraturantukin')}}">Tunjangan Kinerja</a></li>
                            <li><a href="{{ url('/peraturanpbj')}}">PBJ</a></li>
                            <li><a href="{{ url('/peraturan')}}">Laporan Pertanggung Jawaban</a></li>
                        </ul>
                    </li>
                     <li class="dropdown"> 
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                SPD Center <span class="caret"></span>
                    </a>
                            
                        <ul class="dropdown-menu" role="menu">                    
                        <li><a href="#">SPD Center</a></li>
                        <li><a href="#">Bendahara Pengeluaran 1</a></li>
                        <li><a href="#">Bendahara Pengeluaran 1</a></li>
                      </ul>

                      </li>
                    @endrole

                    @role(2)
                     <li><a href="{{ url('/') }}">Home</a></li>
                     <li><a href="{{ url('/user/'.Auth::id()) }}">Profile</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Peraturan <span class="caret"></span>
                        <ul class="dropdown-menu" role="menu">                    
                            <li><a href="{{ url('/peraturanpd')}}">Perjalanan Dinas</a></li>
                            <li><a href="{{ url('/peraturanbp')}}">Bendahara Pengeluaran</a></li>
                            <li><a href="{{ url('/peraturantukin')}}">Tunjangan Kinerja</a></li>
                            <li><a href="{{ url('/peraturanpbj')}}">PBJ</a></li>
                            <li><a href="{{ url('/peraturan')}}">Laporan Pertanggung Jawaban</a></li>
                        </ul>
                    </li>
                     <li class="dropdown"> 
                    
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                SPD Center <span class="caret"></span>
                    </a>
                            
                        <ul class="dropdown-menu" role="menu">                    
                        <li><a href="#">SPD Center</a></li>
                        <li><a href="#">Bendahara Pengeluaran 1</a></li>
                        <li><a href="#">Bendahara Pengeluaran 1</a></li>
                      </ul>

                      </li>
                    @endrole

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @role(1) 
                                <li>
                                    <a href="{{ url('admin/new-post') }}">Add new post</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/user/'.Auth::id().'/posts') }}">My Posts</a>
                                </li>
                                @endrole
                                
                                 @role(2) 
                                <li>
                                    <a href="{{ url('bp/new-post') }}">Add new post</a>
                                </li>
                                <li>
                                    <a href="{{ url('bp/user/'.Auth::id().'/posts') }}">My Posts</a>
                                </li>
                                @endrole

                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
            @if (Session::has('message'))
            <div class="flash alert-info">
                <p class="panel-body">
                    {{ Session::get('message') }}
                </p>
            </div>
            @endif
            @if ($errors->any())
            <div class='flash alert-danger'>
                <ul class="panel-body">
                    @foreach ( $errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>@yield('title')</h2>
                            @yield('title-meta')
                        </div>
                        <div class="panel-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p>Copyright &copy; 2016 | <a href="#">Telek Jaran</a></p>
                </div>
            </div>
        </div>

   

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
