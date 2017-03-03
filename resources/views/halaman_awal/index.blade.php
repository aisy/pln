@extends('template')

@section('header')
	<!--Mask-->
	<div class="view hm-black-strong">
		<div class="full-bg-img flex-center">
			<div class="container">
				<div class="row" id="home">

					<!--First column-->
					<div class="col-lg-6">
						<div class="description">
							<h2 class="h2-responsive wow fadeInLeft">
								Selamat Datang di Situs Layanan PLN
							</h2>
							<hr class="hr-dark">
							<p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
							<br>
							<a class="btn btn-outline-white btn-lg wow fadeInLeft" data-wow-delay="0.7s">Lihat Selengkapnya</a>

						</div>
					</div>
					<!--/.First column-->

					<!--Second column-->
					<div class="col-lg-4 offset-lg-1 flex-center">
						<!--Form-->
						<img src="{{ URL::asset('bower_components/img/Asset3.png') }}" alt="" class="img-fluid wow fadeInRight" id="app-mockup">
						<!--/.Form-->

					</div>
					<!--/Second column-->

				</div>
			</div>
		</div>
	</div>
	<!--/.Mask-->
@endsection

@section('konten1')

	<!--Section: Magazine v.1-->
	<section class="section magazine-section">

		<!--First row-->
		<div class="row text-left">

			<!--First column-->
			<div class="col-lg-8 col-md-12">

				<!--Featured news-->
				<div class="single-news">

					<!--Image-->
					<div class="view overlay hm-white-slight">
						<img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(27).jpg">
						<a>
							<div class="mask"></div>
						</a>
					</div>

					<!--Excerpt-->
					<div class="news-data">
						<a href="" class="light-blue-text"><h5><i class="fa fa-plane"></i> Travels</h5></a>
						<p><strong><i class="fa fa-clock-o"></i> 20/08/2016</strong></p>
					</div>
					<h3><a>Top 5 places in Italy you need to visit.</a></h3>
					<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
					</p>

				</div>
				<!--/Featured news-->

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
