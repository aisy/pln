@extends('template')

@section('header_class')
	normal-header
@endsection

@section('konten1')
	<section class="section">
		<!--Second column-->
		<!--Section heading-->
		<h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Pengajuan</h1>
		<!--Section description-->

		<p class="section-description wow fadeIn" data-wow-delay="0.4s">Rumah, kantor atau bangunan anda belum terpasang listrik? jika iya silahkan daftarkan diri anda untuk mengajukan daya, kami akan survey lokasi anda dan juga memastikan kondisi yang bagus untuk pemasangan daya listrik di bangunan anda</p>

		<div class="col-lg-12">
			<!--Form-->

			<div class="card wow fadeInLeft">
				<div class="card-block">
					<!--Header-->
					<div class="text-xs-center">
						<h3><i class="fa fa-reorder"></i> Pengajuan</h3>
						<hr>
					</div>

					<!--Body-->
					<div class="col-md-6">
						<div class="md-form">
							<input type="text" id="form3" class="form-control" placeholder="Nama Lengkap">
						</div>

						<div class="md-form">
							<textarea type="text" class="md-textarea" placeholder="Alamat"></textarea>
						</div>

						<div class="form-inline">

							<div class="md-form form-group">
								<input type="text" id="form91" class="form-control validate" placeholder="RW">
							</div>

							<div class="md-form form-group">
								<input type="text" id="form92" class="form-control validate" placeholder="RT">
							</div>

						</div>

						<div class="md-form">
							<!--Blue select-->
							<select class="mdb-select colorful-select dropdown-primary">
								<option value="">Kelurahan</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option>
								<option value="5">Option 5</option>
							</select>
							<!--/Blue select-->
						</div>

						<div class="md-form">
							<!--Blue select-->
							<select class="mdb-select colorful-select dropdown-primary">
								<option value="">Kecamatan</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option>
								<option value="5">Option 5</option>
							</select>
							<!--/Blue select-->
						</div>

					</div>

					<div class="col-md-6">

						<div class="md-form">
							<input type="text" id="form3" class="form-control" placeholder="No. Telp">
						</div>

						<div class="md-form">
							<input type="text" id="form3" class="form-control" placeholder="No. Ktp">
						</div>

						<div class="md-form">
							<!--Blue select-->
							<select class="mdb-select colorful-select dropdown-primary">
								<option value="">Layanan</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option>
								<option value="5">Option 5</option>
							</select>
							<!--/Blue select-->
						</div>

						<div class="md-form">
							<!--Blue select-->
							<select class="mdb-select colorful-select dropdown-primary">
								<option value="">Peruntukan</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option>
								<option value="5">Option 5</option>
							</select>
							<!--/Blue select-->
						</div>

						<div class="md-form">
							<!--Blue select-->
							<select class="mdb-select colorful-select dropdown-primary">
								<option value="">Pilih Daya yang di Inginkan</option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option>
								<option value="5">Option 5</option>
							</select>
							<!--/Blue select-->
						</div>
					</div>




					<div class="text-xs-center">
						<button class="btn btn-ins btn-lg">Sign up</button>
					</div>

				</div>
			</div>
			<!--/.Form-->
		</div>
		<!--/Second column-->
	</section>
@endsection
