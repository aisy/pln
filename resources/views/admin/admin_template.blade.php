<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin PLN</title>

    <!-- CSS -->
    <link href="{{ URL::to('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ URL::to('bower_components/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('bower_components/css/mdb.css') }}" rel="stylesheet">
    <link href="{{ URL::to('bower_components/css/style.css') }}" rel="stylesheet">
    @yield('css')

</head>

<body class="fixed-sn mdb-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">

            <!-- Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                    <img src="http://mdbootstrap.com/images/avatars/img%20(9)" class="img-fluid rounded-circle">
                    <div class="rgba-stylish-strong">
                        <p class="user white-text">{{ Session::get('session')->username }}<br>{{ Session::get('session')->level }}</p>
                    </div>
                </div>
            </li>
            <!--/. Logo -->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                      <a href=" {{ URL::to('administrator') }} " class="waves-effect arrow-r">
                        <i class="fa fa-home"></i> Home
                      </a>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-flash"></i> Pengaduan<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                              @if (Session::get('session')->level == "admin" || Session::get('session')->level == "pelayanan pelanggan")
                                <li><a href="{{ URL::to('administrator/pengaduan/1') }}" class="waves-effect">1.1 Pasang Baru</a>
                                </li>
                                <li><a href="{{ URL::to('administrator/pengaduan/2') }}" class="waves-effect">1.2 Penambahan Daya</a>
                                </li>
                                <li><a href="{{ URL::to('administrator/pengaduan/3') }}" class="waves-effect">1.3 LPB (Listrik pulsa prabayar)</a>
                                </li>

                             @endif

                              @if (Session::get('session')->level == "admin" || Session::get('session')->level == "transaksi energi")
                                <li><a href="{{ URL::to('administrator/pengaduan/4') }}" class="waves-effect">1.4 Baca Meter</a>
                                </li>
                                <li><a href="{{ URL::to('administrator/pengaduan/5') }}" class="waves-effect">1.5 P2TL (Penerbitan pemakaian tunggakan tenaga listrik)</a>
                                </li>
                                <li><a href="{{ URL::to('administrator/pengaduan/6') }}" class="waves-effect">1.6 Tunggakan</a>
                                </li>
                              @endif

                            </ul>
                        </div>
                    </li>
                    <li>
                      <a href=" {{ URL::to('administrator/berita') }} " class="waves-effect arrow-r">
                        <i class="fa fa-newspaper-o"></i> Berita
                      </a>
                    </li>
                    <li>
                      <a href=" {{ URL::to('administrator/antrian') }} " class="waves-effect arrow-r">
                        <i class="fa fa-list-ul"></i> Antrian
                      </a>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>PLN admin</p>
            </div>

            <ul class="nav navbar-nav float-xs-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profil</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="{{ URL::to('administrator/logout') }}">Logout</a>
                        {{-- <a class="dropdown-item" href="#">My account</a> --}}
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->
    </header>
    <!--/Double navigation-->

    <!--Main layout-->
    <main>
        <div class="container-fluid">
            @yield('section1')
        </div>
    </main>
    <!--/Main layout-->

    <!-- SCRIPTS -->
    <script src="{{ URL::to('bower_components/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::to('bower_components/js/tether.min.js') }}"></script>
    <script src="{{ URL::to('bower_components/js/bootstrap.js') }}"></script>
    <script src="{{ URL::to('bower_components/js/mdb.js') }}"></script>
    <!-- SCRIPTS -->

    @yield('js')

    <script>
        // SideNav init
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

    <script>
        new WOW().init();
    </script>

    <script>
        $(function() {
            var data = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                }, {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }]
            };

            var option = {
                responsive: true,
            };

        });
    </script>

</body>

</html>
