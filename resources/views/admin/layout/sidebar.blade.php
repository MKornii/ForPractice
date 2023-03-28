<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ url('admin//images/AdminLTELogo.png') }}" alt="AdminLTE" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{ route('posts.create') }}" class="nav-link">
                    <i class="nav-icon  fas fa-solid fa-plus"></i>
                    <p>
                        Створити
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link">
                    <i class="nav-icon  fas fa-th-list"></i>
                    <p>
                        Новини
                    </p>
                </a>
            </li>


        </ul>
    </div>
    <!-- /.sidebar -->
</aside>

