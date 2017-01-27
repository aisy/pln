<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  <title>PLN</title>

  <!-- CSS -->
  <link href="{{ URL::to('bower_components/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/style.min.css') }}" rel="stylesheet">

</head>

<body style="margin-top: 50px">

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-flash"></i> PLN</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ url('halaman-utama') }}"><i class="fa fa-home"></i> Halaman utama</a></li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-handshake-o"></i> Layanan <b class="caret"></b>
            </a>

            <ul class="dropdown-menu">
             <li><a href="{{ url('keluhan') }}"><i class="fa fa-list-alt"></i> Pengaduan Keluhan</a></li>
             <li><a href="{{ url('ubah-daya') }} "><i class="fa fa-flash"></i> Ubah Daya</a></li>
             <li><a href="{{ url('pasang-baru') }} "><i class="fa fa-wrench"></i> Pasang Baru</a></li>
             {{-- <li><a href="{{ url('pemutusan') }}"><i class="fa fa-plug"></i> Pemutusan</a></li> --}}
           </ul>
         </li>

       </ul>

       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Username <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href=""><i class="fa fa-user-circle-o"></i> Profil</a></li>
            <li><a href="#contact"><i class="fa fa-edit"></i> Ubah Profil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href=""><i class="fa fa-sign-out"></i>Keluar </a></li>
          </ul>
        </li>
      </ul>

    </div><!--/.nav-collapse -->
  </div>
</nav>

@yield('konten1')
@yield('konten2')
@yield('konten3')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::to('bower_components/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
  </html>
