@extends('template')
 
@section('header_class') 
	normal-header 
@endsection

 @section('section1')

<section class="section">

	<h1>Pilih Pengaduan</h1>

	<p class="section-description wow fadeIn" data-wow-delay="0.4s">
		Punya Masalah dengan layanan kami? silahkan laporkan keluhan anda di sini
	</p>

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
		<br>
	@endif

	<div class="row">

		@foreach ($kategori as $record)
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">
						<div class="center text-xs-center">
							{{ $record->nama_kategori }}
						</div>
					</h4>
					<div class="center text-xs-center">
						<a href="{{ URL::to('pengaduan/menu/'.$record->id ) }}" class="btn btn-default">Ajukan</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach

	</div>

</section>

@stop