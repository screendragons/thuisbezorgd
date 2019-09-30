
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/animate.min.css" />
  <link rel="stylesheet" href="./css/ionicons.min.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="{{ url('/home') }}">Thuisbezorgd</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                  @guest
                    <li>
                        <a class="#" href="#">Restaurants</a>
                    </li>
                    <li>
                        <a class="#" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                      <li>
                        <a class="#" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                    @endif
                    <li>
                        <a class="#" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li>
                        <a class="#" href="#">Contact</a>
                    </li>
                  @endguest
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="/thuisbezorgd/public/login">Login</a>
                    </li>

                    <li>
                        <a class="page-scroll" data-toggle="modal" method="POST" href="{{ route('logout') }}">Logout</a>
                        @csrf
                    </li>
                </ul>
            </div>
        </div>
    </nav>
