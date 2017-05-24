
@extends('template')

{{--  --}}
@section('caraousel-item')
<style rel="stylesheet">

<?php $i=1; ?>
@foreach ($carousel as $key1)
.carousel-item:nth-child({{ $i }}) {
  background-image: url("http://mdbootstrap.com/images/slides/slide%20({{ $i }}).jpg");
  background-repeat: no-repeat;
  background-size: cover;
  opacity: 0.4;
}
<?php $i++; ?>
@endforeach

</style>
@endsection
{{--  --}}

{{-- HEADER --}}
@section('header')
  <!--Carousel Wrapper-->


  <!--/.Carousel Wrapper-->
@endsection
{{-- HEADER --}}

{{-- SECTION 1 --}}
@section('section1')
  <!--Section: Magazine v.1-->
  <section class="section magazine-section bod">

    <!--First row-->
    <div class="row text-left">

      <!--First column-->
      <div class="col-lg-8 col-md-12">

        <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1" data-slide-to="1"></li>
            <li data-target="#carousel-example-1" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
              <!--Caption-->
              <div class="flex-center animated fadeInDown">
                <ul>
                  <li>
                    <h1 class="h1-responsive">Material Design for Bootstrap 4</h1></li>
                    <li>
                      <p>The most powerful and free UI KIT for the newest Bootstrap</p>
                    </li>
                    <li>
                      <a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-primary btn-lg">Sign up!</a>
                      <a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg">Learn more</a>
                    </li>
                  </ul>
                </div>
                <!--Caption-->
              </div>
              <!--/.First slide-->

              <!--Second slide -->
              <div class="carousel-item">
                <!--Caption-->
                <div class="flex-center animated fadeInDown">
                  <ul>
                    <li>
                      <h1 class="h1-responsive">Lots of tutorials at your disposal</h1>
                    </li>
                    <li>
                      <p>And all of them are FREE!</p>
                    </li>
                    <li>
                      <a target="_blank" href="http://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-primary btn-lg">Start learning</a>
                    </li>
                  </ul>
                </div>
                <!--Caption-->
              </div>
              <!--/.Second slide -->

              <!--Third slide-->
              <div class="carousel-item">
                <!--Caption-->
                <div class="flex-center animated fadeInDown">
                  <ul>
                    <li>
                      <h1 class="h1-responsive">Visit our support forum</h1></li>
                      <li>
                        <p>Our community can help you with any question</p>
                      </li>
                      <li>
                        <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg">Support forum</a>
                      </li>
                    </ul>
                  </div>
                  <!--Caption-->
                </div>
                <!--/.Third slide-->
              </div>
              <!--/.Slides-->

              <!--Controls-->
              <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>

            <div class="text-xs-center">
              <button type="button" class="btn btn-default text-xs-center">
                <i class="fa fa-list-ol"></i> Lihat Selengkapnya
              </button>
            </div>

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-lg-4 col-md-12">


            <!--Card-->
            <div class="card-overlay" style="background-image: url({{ URL::to('images/pelayanan.jpg') }})">

              <!--Content-->
              <div class="white-text text-xs-center">
                <div class="card-block">
                  <h3 class="yellow-text"><i class="fa fa-flash"></i> Olah Daya</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    <a href="{{ URL::to('layanan') }}" class="btn btn-lg btn-outline-white"><i class="fa fa-clone left"></i> View project</a>
                  </div>
                </div>
              </div>
              <!--/.Card-->

              <!--Card-->
              <div class="card-overlay" style="background-image: url({{ URL::to('images/cs.jpg') }})">

                <!--Content-->
                <div class="white-text text-xs-center">
                  <div class="card-block">
                    <h3 class="yellow-text"><i class="fa fa-comments"></i> Pengaduan</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <a href="{{ URL::to('pengaduan') }}" class="btn btn-lg btn-outline-white"><i class="fa fa-clone left"></i> Adukan Masalah</a>
                    </div>
                  </div>
                </div>
                <!--/.Card-->


            </div>
            <!--/Second column-->

          </div>
          <!--/First row-->

        </section>
        <!--/Section: Magazine v.1-->
      @stop
      {{-- SECTION 1 --}}
