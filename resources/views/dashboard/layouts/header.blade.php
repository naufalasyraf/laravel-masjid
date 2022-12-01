<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <h2 class ="mt-3" style="color: #AFEEEE;">SI-Masjid Raya Sumatera Barat</h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Admin </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                                  @auth
                                  <li class="nav-item">
                                    <form action="/logout" method="post">
                                      @csrf<button class="btn btn-dark" type="submit">Logout</button>
                                  </form>
                              </li>
                              @else
                              <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>