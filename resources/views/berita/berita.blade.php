@extends('template')

{{-- SECTION 1 --}}
@section('section1')
	<!--Section: Magazine v.1-->
	<section class="section magazine-section bod">

		<!--First row-->
		<div class="row text-left">

			<!--First column-->
			<div class="col-lg-8 col-md-12">

				@foreach ($berita as $key)
					<!--Small news-->
					<div class="single-news">

						<div class="row">
							<div class="col-md-3">

								<!--Image-->
								<div class="view overlay hm-white-slight">
									<img src="{{ URL::to('news')."/".$key['gambar'] }}">
									<a>
										<div class="mask"></div>
									</a>
								</div>
							</div>

							<!--Excerpt-->
							<div class="col-md-9">
								<p><strong>{{ $key['judul'] }}</strong></p>
								<a>{{ str_limit($key['isi'], 300) }}
									<i class="fa fa-angle-right"></i>
								</a>
							</div>

						</div>
					</div>
					<!--/Small news-->
				@endforeach


				{{-- <div class="text-xs-center">
					<button type="button" class="btn btn-default text-xs-center">
							<i class="fa fa-list-ol"></i> Lihat Selengkapnya
					</button>
				</div> --}}

        <div class="center text-xs-center">
          {!! $berita->render() !!}
        </div>

			</div>
			<!--/First column-->

			<!--Second column-->
			<div class="col-lg-4 col-md-12">

				<nav class="navbar navbar-dark sidebar-heading">
					<div class="flex-center">
						<p class="white-text">Urutkan</p>
					</div>
				</nav>

				<div class="list-group">
					<a href="#" class="list-group-item active">Tahun</a>
					<a href="#" class="list-group-item">Bulan</a>
				</div>

			</div>
			<!--/Second column-->

		</div>
		<!--/First row-->

	</section>
	<!--/Section: Magazine v.1-->
@stop
{{-- SECTION 1 --}}
