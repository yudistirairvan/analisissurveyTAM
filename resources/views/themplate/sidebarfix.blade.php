<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="@yield('logo')" alt="adminlte Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Analisis TAM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="@yield('profile')" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="dashboard" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/variabel" class="nav-link">
                <i class="fas fa-list-ul"></i>
                <p>
                    Variabel
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/pertanyaan" class="nav-link">
                <i class="fas fa-list-ul"></i>
                <p>
                    Pertanyaan
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/transaction" class="nav-link">
                <i class="fas fa-list-ul"></i>
                <p>
                    Transaction Data
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/hasil" class="nav-link">
                <i class="fas fa-list-ul"></i>
                <p>
                    Hasil
                </p>
                </a>
            </li>









        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
