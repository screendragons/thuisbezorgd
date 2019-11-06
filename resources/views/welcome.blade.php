@extends('partials.header')
@extends('layouts.default')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thuisbezorgd</title>
  </head>
  <body>

    <header id="first">

        <div class="header-content">
            <div class="inner">
                <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top" alt="..." height="100" width="100">
                <h1 class="cursive">
                    Thuisbezorgd
                </h1>
                <h4>
                    Let's take away today
                </h4>
                <hr>

                @if(Auth::user() == false)
                    <a href="{{ route('login') }}" class="btn btn-primary btn-xl page-scroll">
                        Login
                    </a>
                @else
                    <a href="{{ url('/restaurant') }}" class="btn btn-primary btn-xl page-scroll">      Restaurants
                    </a>
                @endif
            </div>
        </div>
    </header>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/restaurant') }}">Restaurants</a></li>
                        <li><a href="{{ url('/profile') }}">My takeaway</a></li>
                        {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                    </ul>
                </div>
            </div>
            <br/>
        </div>
    </footer>
    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
