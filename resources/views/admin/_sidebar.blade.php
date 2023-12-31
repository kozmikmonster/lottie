<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{asset('assets')}}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Lottie®</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @auth
                <a href="{{route('profile.show')}}" class="d-block">{{Auth::user()->name}}</a>
                <a href="{{route('logout')}}" class="d-block">Logout</a>
                @endauth

            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('admin_category')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Category</p>
                    </a>
                    </li>
                <li class="nav-item">
                    <a href="{{route('admin_products')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Products</p>
                    </a>
                </li>

                <li class="nav-header"> Labels </li>

                <li class="nav-item">
                    <a href="{{route('admin_setting')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning">
                            <p class="text">Settings</p>
                        </i>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

