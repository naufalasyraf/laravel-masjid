<header class="site-navbar" role="banner">

  <div class="container">
    <div class="row align-items-center">

      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="{{ Request::is('home') ? 'active' : ''}}">
              <a class="" href="{{ url
              ('home') }}"><span>Home</span>
            </a>
          </li>

          <li class="{{ Request::is('harian') ? 'active' : ''}}"><a class="" href="{{ url
            ('harian') }}"><span>Sholat Harian</span></a></li>

            <li class="{{ Request::is('jumat') ? 'active' : ''}}"><a class="{{ Request::is('jumat') ? 'active' : ''}}" href="{{ url
              ('jumat') }}"><span>Sholat Jumat</span></a></li>

              <li class="{{ Request::is('kegiatan') ? 'active' : ''}}"><a class="{{ Request::is('kegiatan') ? 'active' : ''}}" href="{{ url
                ('kegiatan') }}"><span>Kegiatan</span></a></li>

                <li class="{{ Request::is('keuangan') ? 'active' : ''}}"><a class="{{ Request::is('keuangan') ? 'active' : ''}}" href="{{ url
                ('keuangan') }}"><span>Keuangan</span></a></li>


                  @auth
                  <li class="">
                    <form action="/logout" method="post">
                      @csrf<button class="btn btn-transparent text-white" type="submit">Logout</button>
                    </form>
                  </li>
                  @else
                  <li class="">
                    <a href="/login"><span>Login</span></a>
                  </li>
                  @endauth
                </ul>
              </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" ></span></a></div>

          </div>

        </div>
      </div>
      
    </header>