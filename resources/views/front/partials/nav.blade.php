<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">COEM NEWS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">BERITA</a>
            </li>

            @auth
              @if(Auth::user()->isAdmin())
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="/admin">ADMIN PANEL</a>
                </li>
              @endif
              <li class="nav-item">
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"
                      class="nav-link js-scroll-trigger">
                      LOG OUT
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
            @endauth

            @guest
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/login">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/register">REGISTER</a>
              </li>
            @endguest
            
          </ul>
        </div>
      </div>
</nav>