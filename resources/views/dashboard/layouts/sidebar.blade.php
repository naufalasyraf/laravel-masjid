<div class="nav-left-sidebar" style="background-color: #B0C4DE;">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="{{ Request::is('dashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('dashboard')}}"><i class="fab fa-fw fa-wpforms"></i>Dashboard</a>
                    </li>
                    <li class="{{ Request::is('pengurusdashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('pengurusdashboard')}}" ><i class="fa fa-fw fa-user"></i>Pengurus</a>
                    </li>
                    <li class="{{ Request::is('imamdashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('imamdashboard')}}" ><i class="fa fa-fw fa-user"></i>Daftar Imam</a>
                    </li>
                    <li class="{{ Request::is('muadzindashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('muadzindashboard')}}" ><i class="fa fa-fw fa-user"></i>Daftar Muadzin</a>
                    </li>
                    <li class="{{ Request::is('keuangandashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('keuangandashboard')}}"><i class="fas fa-fw fa-table"></i>Keuangan</a>
                    </li>
                    <li class="{{ Request::is('kegiatandashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('kegiatandashboard')}}"><i class="fas fa-fw fa-list-alt"></i>Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-calendar"></i>Pelaksana Shalat</a>
                        <div id="submenu-2" class="collapse submenu" style="background-color: #D3D3D3;">
                            <ul class="nav flex-column">
                                <li class="{{ Request::is('hariandashboard') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{url('hariandashboard')}}">Harian</a>
                                </li>
                                <li class="{{ Request::is('jumatdashboard') ? 'active' : ''}}">
                                    <a class="nav-link" href="{{url('jumatdashboard')}}">Jumat</a>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-divider">
                                Laporan
                            </li>
                            <li class="nav-item">
                        <a class="nav-link" href="{{url('laporan_keuangan')}}" target="_blank"><i class="fas fa-fw fa-list-alt"></i>Keuangan</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>