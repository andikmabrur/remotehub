<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link {{Request::is('events') ? 'active' : ''}}" href="{{ url('events') }}">Events</a>
          <a class="nav-item nav-link {{Request::is('services') ? 'active' : ''}}" href="{{ url('services') }}">Services</a>
          <a class="nav-item nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{ url('contact') }}">Contact</a>
          
          @if (Route::has('login'))
            @auth
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle btn-login" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ __('Account')  }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">
                      {{ Auth::user()->firstname ." " .Auth::user()->lastname }}
                  </a>

                  <a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a>

                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            @else
              <a class="nav-item nav-link btn-login" href="{{ route('login') }}">Login or Register</a>
            @endauth
          @endif

        </div>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->
</header>