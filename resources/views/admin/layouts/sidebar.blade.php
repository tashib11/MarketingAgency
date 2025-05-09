<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset ('assets/images/idsb.svg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">IDSB-Global</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ asset('/Dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Create Blog</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/admin/blogs') }}" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Blog List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ asset('/admin/seo-list') }}" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>SEO List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/admin/service-list') }}" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Service List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/admin/free-consultancy-list') }}" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Consultancy List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ asset('/Dashboard/UserList') }}" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ asset('/') }}" class="nav-link">
                        <i class="nav-icon  fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>
