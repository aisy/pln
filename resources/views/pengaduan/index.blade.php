@extends('template')

@section('header_class')
	normal-header
@endsection

@section('konten1')

	@section('konten1')
		<section class="section">
			<!--Second column-->
			<!--Section heading-->
			<h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Pengaduan</h1>
			<!--Section description-->

			<p class="section-description wow fadeIn" data-wow-delay="0.4s">Punya Masalah dengan layanan kami? silahkan laporkan keluhan anda di sini</p>

			<div class="col-lg-6 push-md-3">
				<!--Form-->

				<div class="card wow fadeInLeft">
					<div class="card-block">
						<!--Header-->
						<div class="text-xs-center">
							<h3><i class="fa fa-comments"></i> Pengaduan</h3>
							<hr>
						</div>

						<!--Body-->

							<div class="md-form">
								<!--Blue select-->
								<select class="mdb-select colorful-select dropdown-primary">
									<option value="">Jenis Keluhan</option>
									@foreach ($kategori as $key)
										<option value="{{ $key['id'] }}">
											{{ $key['nama_kategori'] }}
										</option>
									@endforeach
								</select>
								<!--/Blue select-->
							</div>

							<div class="md-form">
								<textarea type="text" class="md-textarea" placeholder="keluhan"></textarea>
						</div>

						<div class="text-xs-center">
							<button class="btn btn-ins btn-lg">Sign up</button>
						</div>

					</div>
				<!--/.Form-->
			</div>
			<!--/Second column-->
		</section>
	@endsection

@stop
