@extends('template')

@section('konten1')

<div class="container">
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<div class="page-header">
			<h3><i class="fa fa-plug"></i> Ubah Daya Listrik</h3>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<form action="" method="POST" role="form">
					<legend>Form Ubah Daya</legend>
					<div class="alert alert-danger">
					 	<strong>
					 		<i class="fa fa-warning"></i> Data Pelanggan otomatis diambil dari akun yang digunakan!
					 	</strong>
					 </div> 
				
					<div class="form-group">
						<select name="kategori" id="inputKategori" class="form-control">
							<option value="">Jenis Layanan</option>
							@for ($i = 1; $i<=5 ; $i++)
								<option value="">Layanan {{ $i }}</option>
							@endfor
						</select>
					</div>

					<div class="form-group">
						<select name="kategori" id="inputKategori" class="form-control">
							<option value="">Peruntukan</option>
							@for ($i = 1; $i<=3 ; $i++)
								<option value="">Peruntukan {{ $i }}</option>
							@endfor
						</select>
					</div>

					<div class="form-group">
						<select name="kategori" id="inputKategori" class="form-control">
							<option value="">Besar Daya</option>
							@for ($i = 1; $i<=4 ; $i++)
								<option value="">Daya {{ $i }}</option>
							@endfor
						</select>
					</div>
				
					<button type="submit" class="btn btn-success">Kirim</button>
				</form>
			</div>
		</div>
		

	</div>

	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<div class="page-header">
			<h3><i class="fa fa-handshake-o"></i> Layanan</h3>
		</div>

		<div class="list-group">
			<a href="#" class="list-group-item active">Item 1</a>
			<a href="#" class="list-group-item">Item 2</a>
			<a href="#" class="list-group-item">Item 3</a>
		</div>
	</div>
</div>
@stop