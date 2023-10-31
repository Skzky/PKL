<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('template/dist/img/pemko.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">DISBUDPORAPAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
      


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                @if (auth()->user()->level == "Admin")
                
                <li class="nav-item">
                    <a href="{{ url ('Pegawai')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Data Pegawai</p>
                    </a>
                </li>
                @endif
                
                <li class="nav-item">
                    <a href="{{ url ('Masuk_keluar')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Data Presensi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url ('Laporan')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Laporan</p>
                    </a>
                </li>
            </ul>
        </nav>
        
        <!-- /.sidebar-menu -->

        <!-- Logout Button -->
       
    <!-- /.sidebar -->
</aside>
