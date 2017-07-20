<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login Sistem PLN</title>

  <link href="{{ URL::to('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('bower_components/css/mdb.css') }}" rel="stylesheet">
  {{-- <link href="{{ URL::to('bower_components/css/style.css') }}" rel="stylesheet"> --}}

  <style>
  html,
  body,
  header,
  .view {
    height: 100%;
  }
  /* Navigation*/

  .navbar {
    background-color: transparent;
  }

  .top-nav-collapse {
    background-color: #006296;
  }

  @media only screen and (max-width: 768px) {
    .navbar {
      background-color: #006296;
    }
  }
  /*Intro*/

  .view {
    background: url("../images/pelayanan.jpg")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  @media (max-width: 768px) {
    .full-bg-img,
    .view {
      height: auto;
      position: relative;
    }
  }

  .description {
    padding-top: 25%;
    padding-bottom: 3rem;
    color: #fff
  }

  @media (max-width: 992px) {
    .description {
      padding-top: 7rem;
      text-align: center;
    }
  }
  footer.page-footer {
    background-color: #077AB7;
  }
  </style>

</head>

<body>

  <!--Navigation & Intro-->
  <header>

    <!--Mask-->
    <div class="view hm-black-strong">
      <div class="full-bg-img flex-center">
        <div class="container">
          <div class="row" id="home">

            <!--First column-->
            <div class="col-lg-6">
              <div class="description">
                <h2 class="h2-responsive wow fadeInLeft">Selamat Datang di Sistem Admin</h2>
                <hr class="hr-light wow fadeInLeft">
                <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
                <br>
              </div>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-lg-6 wow fadeInRight">
              <!--Form-->
              <div class="card">
                <div class="card-block">
                  <!--Header-->


                    <div class="text-xs-center">
                      <h3><i class="fa fa-sign-in"></i> Login </h3>
                      <hr>
                    </div>

                    @if (count($errors)>0)

                      <div class="alert alert-danger">
                        <i class="fa fa-warning"></i>
                        <strong>Terjadi Kesalahan!</strong>
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>

                    @endif

                    <form action="login" method="POST">

                    <!-- buat token untuk verifikasi dan keamanan -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />

                    <!--Body-->
                    <div class="md-form">
                      <i class="fa fa-user prefix"></i>
                      <input name="username" type="text" id="form3" class="form-control">
                      <label for="form3">Username</label>
                    </div>
                    <div class="md-form">
                      <i class="fa fa-lock prefix"></i>
                      <input name="password" type="password" id="form2" class="form-control">
                      <label for="form2">Password</label>
                    </div>

                    <div class="text-xs-center">
                      <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                      <hr>
                    </div>
                  </form>
                </div>
              </div>
              <!--/.Form-->
            </div>
            <!--/Second column-->
          </div>
        </div>
      </div>
    </div>
    <!--/.Mask-->

  </header>
  <!--/Navigation & Intro-->


  <!-- SCRIPTS -->

  <!-- SCRIPTS -->
  <script src="{{ URL::to('bower_components/js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/tether.min.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/bootstrap.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/mdb.js') }}"></script>

</body>

</html>
