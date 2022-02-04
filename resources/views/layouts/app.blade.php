<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<ul class="background">
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
</ul>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand border-0"
    @if($name ?? '' !== (''))
        style="background-color: #212025;"
    @endif
    >

<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item navItemBureau">
                <a href="{{ route('search') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-search action"></i>
                        {{ __('Search') }}
                </a>
            </li>

            <li class="nav-item navItemBureau">
                <a href="{{ route('favorite') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-star action"></i>
                        {{ __('Favorites') }}
                </a>
            </li>
            <li class="nav-item navItemBureau">
                <a href="{{ route('profile.show') }}" class="nav-link text-white">
                    @if(Auth::user()->img_prfl == 'user.png')
                     <img class="image" src="{{ asset('images/default.png') }}" alt="profile_image">{{ Auth::user()->name }}
                    @else
                    <img class="image" src="{{asset('/storage/'.Auth::user()->img_prfl)}}" alt="profile_image">{{ Auth::user()->name }}
                    @endif
                </a>
            </li>
            <li class="nav-item navItemBureau">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="nav-link" 
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="mr-2 fas fa-sign-out-alt action"></i>
                        </a>
                    </form>
            </li>
            <li class="nav-item dotDesktop">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-ellipsis-v action"></i></a>
            </li>
        </ul>
        <a href="{{ route('home') }}"class="logofull"><img class="logofull" src="{{ asset('images/logofull.png') }}"></a>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4"
       @if($name ?? '' !== (''))
        style="background-color: transparent;
        box-shadow: 0 0 0 rgba(0,0,0,0),0 0px 0px rgba(0,0,0,0)!important;"
        @endif>
        <!-- Brand Logo -->
        @if($name ?? '' !== (''))
        <a href="/" class="d-flex justify-content-center brand-image">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="brand-image" height="70px">
        </a>  
        @else
        <a href="/" class="d-flex justify-content-center brand-image">
            <img src="{{ asset('images/logoDesk.png') }}" alt="Logo" class="brand-image" height="100px">
        </a>        
        @endif>


        @include('layouts.navigation')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer d-flex justify-content-center border-0">
        <!-- Default to the left -->
        <strong class="action">Copyright &copy; 2014-2022</strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

@yield('scripts')
</body>
</html>
