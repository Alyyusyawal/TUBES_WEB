<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" >
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <style>
        .footer{
            position:absolute;
            bottom:0;
            width:100%;
            height:60px;   /* tinggi dari footer */
            background: rgb(0, 90, 139);
            
        }
        /* .bordered{
          border : solid 1px;
        } */
        .row-c{
            /* Center vertically and horizontally */
          position: absolute;
          top: 20%;
          left: 20%;
      
        }
        .col-c{
            /* Center vertically and horizontally */
          position: absolute;
          justify-items: auto
          top: 20%;
          left: 20%;
      
        }
        
        
    </style>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-md" style="background-color: rgb(0, 55, 99)">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:honeydew">
                    LOGO
                </a>
                @auth
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url('admin')}}" style="color:honeydew">Halaman Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('dosen')}}" style="color:honeydew">Halaman Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('mahasiswa')}}" style="color:honeydew">Halaman Mahasiswa</a>
                        </li>
                    </ul>

                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"style="color:honeydew">{{ __('Login') }} </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"style="color:honeydew">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:honeydew">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="color:honeydew">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background-image: linear-gradient(to top, rgb(0, 90, 139), rgb(208, 231, 255)); height:90vh">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 mb-4">
                  <div class="card border-0 shadow-sm">
                    <div class="card-body text-center">
                      <h2 class="card-title mb-4">Kalender</h2>
                      <iframe src="https://calendar.google.com/calendar/embed?src=example%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
                    </div>
                  </div>
                  <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body">
                      <h2 class="card-title mb-4">Helpdesk</h2>
                      <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="#">Helpdesk FIP</a></li>
                        <li class="mb-2"><a href="#">Helpdesk Teknik</a></li>
                        <li class="mb-2"><a href="#">Helpdesk FIP</a></li>
                        <li class="mb-2"><a href="#">Helpdesk FE</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card border-0 shadow-sm">
                    <div class="card-body">
                      @yield('content')
                    </div>
                  </div>
                </div>
              <div class="col-3 bordered">
                <div class="row bordered">
                  <div class="card text-center">
                    <div class="card-header">
                      <h2>Panduan</h2>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled">
                          <li class="mb-2"><a href="#">Tenatang kami </a></li>
                          <li class="mb-2"><a href="#">Panduan Dosen</a></li>
                          <li class="mb-2"><a href="#">Panduan Mahasiswa</a></li>
                          <li class="mb-2"><a href="#">Q & A</a></li>
                      </ul>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
            
          </main>
          
    </div>
    <div class="footer">
        <div class="text-center p-3" style="background-color: rgba(255, 255, 255, 0.2);">
        <a class="text-light">© 2023 Copyright: Kelompok 8</a>
        </div>
    </div>
</body>
</html>
