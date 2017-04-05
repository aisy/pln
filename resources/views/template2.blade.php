<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PLN</title>

  <!-- CSS -->
  <link rel="stylesheet" href="/css/master.css">
  <link href="{{ URL::to('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/mdb.css') }}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/style.css') }}" rel="stylesheet">

  @yield('caraousel-item')

</head>

<body class="blue-skin">

  <!--Navbar-->
  <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
      <i class="fa fa-bars"></i>
    </button>

    <div class="container">

      <!--Collapse content-->
      <div class="collapse navbar-toggleable-xs" id="collapseEx">
        <!--Navbar Brand-->
        <a class="navbar-brand" href="#" target="_blank">PLN</a>
        <!--Links-->
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home"></i> Halaman Utama <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="true"><i class="fa fa-flash"></i> Layanan Daya Listrik</a>
            <div class="dropdown-menu dropdown-primary dd-center" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
              <a class="dropdown-item" href="{{ URL::to('pasang-daya') }}">Pemasangan Daya</a>
              <a class="dropdown-item" href="{{ URL::to('pemutusan-daya') }}">Pemutusan Daya</a>
              <a class="dropdown-item" href="{{ URL::to('ubah-daya') }}">Ubah Daya</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('pengaduan') }}"><i class="fa fa-comments"></i> Pengaduan</a>
          </li>
        </ul>
      </div>
      <!--/.Collapse content-->

    </div>

  </nav>
  <!--/.Navbar-->

  @yield('header')

  <br>

  <!--Content-->
  <div class="container">
    @yield('section1')
  </div>
  <!--/.Content-->

  <!--Footer-->
  <footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
      <div class="row">

        <!--First column-->
        <div class="col-md-3 col-md-offset-1">
          <h5 class="title">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>
        </div>
        <!--/.First column-->

        <hr class="hidden-md-up">

        <!--Second column-->
        <div class="col-md-2 col-md-offset-1">
          <h5 class="title">Links</h5>
          <ul>
            <li><a href="#!">Link 1</a></li>
            <li><a href="#!">Link 2</a></li>
            <li><a href="#!">Link 3</a></li>
            <li><a href="#!">Link 4</a></li>
          </ul>
        </div>
        <!--/.Second column-->

      </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="social-section">
      <ul>
        <li><a class="btn-floating btn-small btn-fb waves-effect waves-light"><i class="fa fa-facebook"> </i></a></li>
        <li><a class="btn-floating btn-small btn-tw waves-effect waves-light"><i class="fa fa-twitter"> </i></a></li>
        <li><a class="btn-floating btn-small btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"> </i></a></li>
        <li><a class="btn-floating btn-small btn-li waves-effect waves-light"><i class="fa fa-linkedin"> </i></a></li>
        <li><a class="btn-floating btn-small btn-git waves-effect waves-light"><i class="fa fa-github"> </i></a></li>
        <li><a class="btn-floating btn-small btn-pin waves-effect waves-light"><i class="fa fa-pinterest"> </i></a></li>
        <li><a class="btn-floating btn-small btn-ins waves-effect waves-light"><i class="fa fa-instagram"> </i></a></li>
      </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
      <div class="container-fluid">
        © 2017 Copyright: PT. PLN Indonesia
      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--Footer-->

  <!-- SCRIPTS -->
  <script src="{{ URL::to('bower_components/js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/tether.min.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/bootstrap.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/mdb.js') }}"></script>
  <!-- SCRIPTS -->


</body>

</html>