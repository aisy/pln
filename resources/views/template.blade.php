<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="/favicon.ico">

  <title>PLN</title>

  <!-- CSS -->
  <link href="{{ URL::to('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/mdb.css') }}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/style.css') }}" rel="stylesheet">
  
</head>

<body class="blue-skin">

  <!--Navigation & Intro-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

      <!-- Collapse button-->
      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
      <i class="fa fa-bars"></i></button>

      <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx">
          <!--Navbar Brand-->
          <a class="navbar-brand" href="http://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">PLN</a>
          <!--Links-->
          <ul class="nav navbar-nav smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Halaman Utama <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#best-features">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#examples-of-use">Examples</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#our-team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>

          <!--Navbar icons-->
          <ul class="nav navbar-nav nav-flex-icons">
            <li class="nav-item wow fadeIn" data-wow-delay="0.2s">
              <a class="nav-link"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="nav-item wow fadeIn" data-wow-delay="0.3s">
              <a class="nav-link"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="nav-item wow fadeIn" data-wow-delay="0.4s">
              <a class="nav-link"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>

        </div>
        <!--/.Collapse content-->

      </div>

    </nav>
    <!--/.Navbar-->

    @yield('header')

  </header>
  <!--/Navigation & Intro-->

<main>
  <div class="container">
  @yield('konten1')
  @yield('konten2')
  @yield('konten3')
  </div>
</main>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ URL::to('bower_components/js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/bootstrap.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/mdb.js') }}"></script>
  </body>
  </html>
