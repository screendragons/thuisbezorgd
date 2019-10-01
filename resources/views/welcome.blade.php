@extends('partials.header')

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
                <img src="tb.jpg" height="100" width="100">
                <h1 class="cursive">Thuisbezorgd</h1>
                <h4>Let's take away today</h4>
                <hr>
                <a href="/thuisbezorgd/public/login" class="btn btn-primary btn-xl page-scroll">Login</a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary">A place for the best food</h2>
                    <br>
                    <p class="text-faded">
                       Ben je een keer lui om te koken? Bestel via Thuisbezorgd en je hoeft niet uit huis om je aankopen te doen
                    </p>
                    <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Restaurants</a></li>
                        <li><a href="">My takeaway</a></li>
                        <li><a href="">Register</a></li>
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
