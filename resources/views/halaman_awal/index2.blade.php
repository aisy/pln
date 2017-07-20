
@extends('template')

{{--  --}}
@section('caraousel-item')
<style rel="stylesheet">

<?php $i=1; ?>
@foreach ($carousel as $key1)
.carousel-item:nth-child({{ $i }}) {
  background-image: url("{{ URL::to('news/kabel-pln.jpg') }}");
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
                    <h1 class="h1-responsive">SMK PGRI 3 Kota Malang Dipercaya</h1></li>
                    {{-- <li>
                      <p>The most powerful and free UI KIT for the newest Bootstrap</p>
                    </li> --}}
                    <li>

                      {{-- <a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg">Learn more</a> --}}
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

            @foreach ($more_news as $key)
    					<!--Small news-->
    					<div class="single-news">

    						<div class="row">
    							<div class="col-md-3">

    								<!--Image-->
    								<div class="view overlay hm-white-slight">
    									<img src="{{ URL::to('news')."/".$key['gambar'] }}" width="150px" height="150px">
    									<a>
    										<div class="mask"></div>
    									</a>
    								</div>
    							</div>

    							<!--Excerpt-->
    							<div class="col-md-9">
    								<p><strong>{{ str_limit($key['judul'], 50) }}</strong></p>
    								<a>{{  str_limit($key['isi'],300)  }}
    									<i class="fa fa-angle-right"></i>
    								</a>
    							</div>

    						</div>
    					</div>
    					<!--/Small news-->
    				@endforeach

            <div class="text-xs-center">
              <a href="berita" class="btn btn-default text-xs-center">
    							<i class="fa fa-list-ol"></i> Lihat Selengkapnya
    					</a>
            </div>

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-lg-4 col-md-12">


            <!--Panel-->
            <div class="card">
              <div class="card-header navbar-dark white-text">
                Tentang
              </div>
              <div class="card-block">
                <h4 class="card-title">PLN</h4>
                <p class="card-text">Perusahaan Listrik Negara (disingkat PLN) atau nama resminya adalah PT. PLN (Persero) adalah sebuah BUMN yang mengurusi semua aspek kelistrikan yang ada di Indonesia.</p>

              </div>
            </div>
            <!--/.Panel-->

            <!--Panel-->
            <div class="card">
              <div class="card-header navbar-dark white-text">
                Nomor Antrian
              </div>
              <div class="card-block center text-xs-center">
                <h1 class="card-title">{{ $antri['nomor_antrian'] }}</h1>
              </div>
            </div>
            <!--/.Panel-->


          </div>
          <!--/Second column-->

        </div>
        <!--/First row-->

      </section>
      <!--/Section: Magazine v.1-->
    @stop
    {{-- SECTION 1 --}}
