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
            <img src="tb.jpg" height="60" width="60">
            <a class="navbar-brand page-scroll" href="{{ url('/home') }}">Thuisbezorgd</a>

        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
              @guest

                    <li>
                        <a class="#" href="#">Restaurants</a>
                    </li>
                  <li>
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li>
                    @if (Route::has('register'))
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                  </li>
                </ul>
                    @else
                    <li>
                        <a class="#" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li>
                        <a class="#" href="#">Contact</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user() == true)

                       <li>
                            <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="/thuisbezorgd/public/login">Login</a>
                        </li>

                    @else


                        <li>
                            <a class="page-scroll" data-toggle="modal" method="POST" href="{{ route('logout') }}">Logout</a>
                            @csrf
                        </li>
                    @endif
                </ul>
            @endguest
        </div>
    </div>
</nav>
