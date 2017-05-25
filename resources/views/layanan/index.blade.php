@extends('template')

@section('header_class')
	normal-header
@endsection

@section('section1')
	<section class="section">
		<!--Second column-->
		<!--Section heading-->
		<h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Pengolahan Daya</h1>
		<!--Section description-->

		<p class="section-description wow fadeIn" data-wow-delay="0.4s">Ingin Mengelola Listrik Rumah, kantor atau bangunan? jika iya silahkan isi form dibawah ini dan jangan sampai salah mengisi</p>


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

	<div class="col-lg-12">
		<!--Form-->

		<form action="layanan-tambah" method="post">

			<input type="hidden" name="_token" value="{{csrf_token()}}" />

			<div class="card wow fadeInLeft">
				<div class="card-block">
					<!--Header-->
					<div class="text-xs-center">
						<h3><i class="fa fa-flash"></i> Layanan Listrik</h3>
						<hr>

						<div class="md-form">
							<select name="kategori_id" class="mdb-select">
								<option value="" disabled selected>Pilih Layanan</option>
								@foreach ($kategori as $kategori)
									<option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
								@endforeach
							</select>
							{{-- <label>Example label</label> --}}
						</div>

					</div>

					<!--Body-->
					<div class="col-md-6">
						<div class="md-form">
							<input type="text" name="nama_lengkap" id="form3" class="form-control" placeholder="Nama Lengkap">
						</div>

						<div class="md-form">
							<textarea type="text" name="alamat" class="md-textarea" placeholder="Alamat"></textarea>
						</div>

						<div class="form-inline">

							<div class="md-form form-group">
								<input type="text" name="rw" id="form91" class="form-control validate" placeholder="RW">
							</div>

							<div class="md-form form-group">
								<input type="text" name="rt" id="form92" class="form-control validate" placeholder="RT">
							</div>

						</div>

						<div class="md-form">
							<!--Blue select-->
							<select name="kelurahan" class="mdb-select colorful-select dropdown-primary">
								<option value="">Kelurahan</option>
								<option value="1">Klojen</option>
								<option value="2">Polehan</option>
								<option value="3">Buring</option>
								<option value="4">Dinoyo</option>
							</select>
							<!--/Blue select-->
						</div>

						<div class="md-form">
							<!--Blue select-->
							<select name="kecamatan" class="mdb-select colorful-select dropdown-primary">
								<option value="" disabled>Kecamatan</option>
								<option value="1">Klojen</option>
								<option value="2">Blimbing</option>
								<option value="3">Kedung Kandang</option>
								<option value="4">Lowokwaru</option>
								<option value="5">Sukun</option>
							</select>
							<!--/Blue select-->
						</div>

					</div>

					<div class="col-md-6">

						<div class="md-form">
							<input type="text" name="no_telp" id="form3" class="form-control" placeholder="No. Telp">
						</div>

						<div class="md-form">
							<input type="text" name="no_ktp" id="form3" class="form-control" placeholder="No. Ktp">
						</div>

						{{-- <div class="md-form">
						<!--Blue select-->
						<select name class="mdb-select colorful-select dropdown-primary">
						<option value="">Layanan</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
					</select>
					<!--/Blue select-->
				</div> --}}

				<div class="md-form">
					<!--Blue select-->
					{{-- <select name="peruntukan" class="mdb-select colorful-select dropdown-primary">
						<option value="">Peruntukan</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
					</select> --}}
					<textarea name="peruntukan" class="md-textarea" placeholder="Peruntukan" rows="8" cols="80"></textarea>

					<!--/Blue select-->
				</div>

				<div class="md-form">
					<!--Blue select-->
					{{-- <select name="daya" class="mdb-select colorful-select dropdown-primary">
						<option value="">Pilih Daya yang di Inginkan</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
						<option value="4">Option 4</option>
						<option value="5">Option 5</option>
					</select> --}}
					<input type="number" class="form-control" name="daya" placeholder="Daya">
					<!--/Blue select-->
				</div>
			</div>

			<div class="text-xs-center">
				<button type="submit" class="btn btn-ins btn-lg">Ajukan</button>
			</div>

		</div>
	</div>
	<!--/.Form-->
</form>
</div>
<!--/Second column-->
</section>
@endsection

@section('js')
	<script type="text/javascript">
	$(document).ready(function() {
		$('.mdb-select').material_select();
	});
	</script>
@endsection
