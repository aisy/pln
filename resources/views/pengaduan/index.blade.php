@extends('template')

@section('konten1')

<div class="container">
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<div class="page-header">
			<h3><i class="fa fa-newspaper-o"></i> Keluhan</h3>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<form action="" method="POST" role="form">
					<legend>Form Keluhan</legend>
				
					<div class="form-group">
						<select name="kategori" id="inputKategori" class="form-control">
							<option value="">Pilih Kategori Permasalahan</option>
							@for ($i = 1; $i<=10 ; $i++)
								<option value="">Kategori {{ $i }}</option>
							@endfor
						</select>
					</div>
					
					<div class="form-group">
						<label for="">Pemasalahan</label>
						<textarea name="permasalahan" class="form-control" placeholder="Deskripsikan Masalah Anda disini..." rows="3"></textarea>
						{{-- <input type="text" class="form-control" id="" placeholder="Input field"> --}}
					</div>
				
					<button type="submit" class="btn btn-success">Kirim Keluhan</button>
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