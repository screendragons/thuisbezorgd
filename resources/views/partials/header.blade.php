
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top" alt="..." height="60" width="60">
            <a class="navbar-brand page-scroll" href="/thuisbezorgd/public">Thuisbezorgd</a>

        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
              @guest
                <li>
                    <a class="restaurants" href="{{ url('/restaurant') }}">Restaurants</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li>
                    @if (Route::has('register'))
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
                <li>
                    <a class="#" href="{{ url('/contact') }}">Contact</a>
                </li>
                @else
                    <li>
                        <a class="restaurants" href="{{ url('/restaurant') }}">Restaurants</a>
                    </li>
                    @if(Auth::user()->is_admin)
                        <li>
                            <a class="createrestaurants" href="{{ url('/restaurant/create') }}">Create restaurant</a>
                        </li>
                    @endif
                    <li>
                        <a class="profile" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li>
                        <a class="contact" href="{{ url('/contact') }}">Contact</a>
                    </li>
            </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user() == true)
                        <li>
                            <a class="page-scroll" data-toggle="modal" method="POST" href="{{ route('logout') }}">Logout</a>
                            @csrf
                        </li>
                    @else
                        <li>
                            <a class="page-scroll" data-toggle="modal" href="/thuisbezorgd/public/login">Login</a>
                        </li>
                    @endif
                </ul>
            @endguest
        </div>
    </div>
</nav>
