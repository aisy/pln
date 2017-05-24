@extends('template')

@section('header_class')
	normal-header
@endsection

@section('section1')

	<section class="section">
		<!--Second column-->
		<!--Section heading-->
		<h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Pengaduan</h1>
		<!--Section description-->

		<p class="section-description wow fadeIn" data-wow-delay="0.4s">Punya Masalah dengan layanan kami? silahkan laporkan keluhan anda di sini</p>

		@if(Session::has('flash_message'))
			{{-- <div class="alert alert-success">
			<span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em>
		</div> --}}

		<div class="center text-xs-center">
			<div class="chip success-color">
				<p class="white-text">{{ session('flash_message') }}</p>
				<i class="close fa fa-times"></i>
			</div>
		</div>

	@endif

		<div class="col-lg-6 push-md-3">
			<!--Form-->

			<div class="card wow fadeInLeft">

				{!! Form::open(['method' => 'POST', 'url' => 'pengaduan']) !!}

				<div class="card-block">
					<!--Header-->
					<div class="text-xs-center">
						<h3><i class="fa fa-comments"></i> Pengaduan</h3>
						<hr>
					</div>

					<!--Body-->
					<div class="md-form">
						<input type="text" id="form3" class="form-control" placeholder="Nama Lengkap">
					</div>

					<div class="md-form">
						<!--Blue select-->
						<select name="id_kategori" class="mdb-select">
							<option value="" disabled selected>Jenis Keluhan</option>
							@foreach ($kategori as $key)
								<option value="{{ $key['id'] }}">{{ $key['nama_kategori'] }}</option>
							@endforeach
						</select>
						<!--/Blue select-->
					</div>

					<div class="md-form">
						<textarea name="isi" type="text" class="md-textarea" placeholder="keluhan"></textarea>
					</div>

					<div class="text-xs-center">
						<button class="btn btn-ins btn-lg">Kirim Keluhan</button>
					</div>

				</div>

				{!! Form::close() !!}


				<!--/.Form-->
			</div>
			<!--/Second column-->
		</section>

	@stop


	@section('js')
		<script type="text/javascript">
		$(document).ready(function() {
			$('.mdb-select').material_select();
		});
		</script>
	@endsection
