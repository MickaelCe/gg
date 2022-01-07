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

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand border-0">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item navItemBureau">
                <a href="{{ route('search') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-search action"></i>
                        {{ __('Search') }}
                </a>
            </li>

            <li class="nav-item navItemBureau">
                <a href="" class="nav-link text-white">
                    <i class="nav-icon fas fa-star action"></i>
                        {{ __('Favorites') }}
                </a>
            </li>
            <li class="nav-item navItemBureau">
                <a href="{{ route('profile.show') }}" class="nav-link text-white">
                    <img class="image" src="{{asset('/storage/'.Auth::user()->img_prfl)}}" alt="profile_image">{{ Auth::user()->name }}
                </a>
            </li>
            <li class="nav-item dotDesktop">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-ellipsis-v action"></i></a>
            </li>
        </ul>
        <a href="{{ route('home') }}"class="logofull"><img class="logofull" src="{{ asset('images/logofull.png') }}"></a>

        <!-- Right navbar links -->
        {{-- <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link text-white" data-toggle="dropdown" href="#" aria-expanded="true">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" style="left: inherit; right: 0px;">
                    <a href="{{ route('profile.show') }}" class="dropdown-item">
                        <i class="mr-2 fas fa-file"></i>
                        {{ __('My profile') }}
                    </a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="mr-2 fas fa-sign-out-alt"></i>
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </li>
        </ul> --}}
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link d-flex justify-content-around">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="brand-image">
            <span class="brand-text font-weight-bold text-white"><span class="action">G</span>amer <span class="action">G</span>ate</span>
        </a>

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
        <strong class="action">Copyright &copy; 2014-2021</strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

@yield('scripts')
</body>
</html>
