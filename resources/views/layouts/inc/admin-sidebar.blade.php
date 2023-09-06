 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIPARDA</span>
    </a>

    <!-- Sidebar -->

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
        <li class="nav-header">CORE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/user') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('admin/add-user') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Data</p>
                  </a>
                </li>
            </ul>
          </li>
          <li class="nav-header">INTERFACE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                EKONOMI KREATIF
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/ekraf') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('admin/add-ekraf') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Data</p>
                  </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bus-alt"></i>
              <p>
                PAKET WISATA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/paket-wisata') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('admin/add-paket-wisata') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Data</p>
                  </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                EVENT WISATA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('admin/event-wisata') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('admin/add-event-wisata') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Data</p>
                  </a>
                </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>