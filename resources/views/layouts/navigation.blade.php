<!-- Sidebar -->
<div class="sidebar navMobile">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block text-white">Edit profile : <br> <span class="action">{{ Auth::user()->name }}</span> <br>  Since {!! carbon\carbon::parse(Auth::user()->created_at)->format('d-m-y') !!}</a>
                    @if(Auth::user()->img_prfl == 'user.png')
                     <img class="image" src="{{ asset('images/default.png') }}" alt="profile_image">
                    @else
                    <img class="image" src="{{asset('/storage/'.Auth::user()->img_prfl)}}" alt="profile_image">
                    @endif
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2 navMobile">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-th action"></i>
                    <p class='text-white'>
                        {{ __('Home') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('search') }}" class="nav-link">
                    <i class="nav-icon fas fa-search action"></i>
                    <p class='text-white'>
                        {{ __('Search') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-star action"></i>
                    <p class='text-white'>
                        {{ __('Favorites') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="nav-link" 
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt action"></i>
                            <p class='text-white'>
                            {{ __('Log Out') }}
                            </p>
                        </a>
                    </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->