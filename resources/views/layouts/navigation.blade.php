<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('profile.show') }}" class="d-block text-white">Edit profile : <br> <span class="action">{{ Auth::user()->name }}</span></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
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

            {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle nav-icon"></i>
                    <p>
                        Two-level menu
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Child menu</p>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->