
@extends('template2')

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

    /*.carousel-item:nth-child(2) {
        background-image: url("http://mdbootstrap.com/images/slides/slide%20(11).jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .carousel-item:nth-child(3) {
        background-image: url("http://mdbootstrap.com/images/slides/slide%20(7).jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }*/
    /*Caption*/

</style>
@endsection
{{--  --}}

{{-- HEADER --}}
@section('header')
  <!--Carousel Wrapper-->
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
  <!--/.Carousel Wrapper-->
@endsection
{{-- HEADER --}}

{{-- SECTION 1 --}}
@section('section1')
	<!--Section: Magazine v.1-->
	<section class="section magazine-section">

		<!--First row-->
		<div class="row text-left">

			<!--First column-->
			<div class="col-lg-8 col-md-12">

				<nav class="navbar navbar-dark sidebar-heading">
					<div class="flex-center">
						<p class="white-text"><i class="fa fa-newspaper-o"></i> Berita</p>
					</div>
				</nav>

				@foreach ($more_news as $key)
					<!--Small news-->
					<div class="single-news">

						<div class="row">
							<div class="col-md-3">

								<!--Image-->
								<div class="view overlay hm-white-slight">
									<img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(82).jpg">
									<a>
										<div class="mask"></div>
									</a>
								</div>
							</div>

							<!--Excerpt-->
							<div class="col-md-9">
								<p><strong>{{ $key['judul'] }}</strong></p>
								<a>{{ $key['isi'] }}
									<i class="fa fa-angle-right"></i>
								</a>
							</div>

						</div>
					</div>
					<!--/Small news-->
				@endforeach


				<div class="text-xs-center">
					<button type="button" class="btn btn-default text-xs-center">
							<i class="fa fa-list-ol"></i> Lihat Selengkapnya
					</button>
				</div>

			</div>
			<!--/First column-->

			<!--Second column-->
			<div class="col-lg-4 col-md-12">

				<nav class="navbar navbar-dark sidebar-heading">
					<div class="flex-center">
						<p class="white-text">Layanan</p>
					</div>
				</nav>

				<div class="list-group">
					<a href="#" class="list-group-item active">Sport</a>
					<a href="#" class="list-group-item">Music</a>
					<a href="#" class="list-group-item">Travels</a>
					<a href="#" class="list-group-item">Fashion</a>
					<a href="#" class="list-group-item">Parties</a>
				</div>

			</div>
			<!--/Second column-->

		</div>
		<!--/First row-->

	</section>
	<!--/Section: Magazine v.1-->
@stop
{{-- SECTION 1 --}}
