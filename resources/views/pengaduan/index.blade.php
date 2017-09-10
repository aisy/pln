@extends('template')

@section('header_class')
	normal-header
@endsection

@section('section1')
	<section class="section">
		
		{{--  @if(Session::has('flash_message'))

		<div class="center text-xs-center">
			<div class="chip success-color">
				<p class="white-text">{{ session('flash_message') }}</p>
				<i class="close fa fa-times"></i>
			</div>
		</div>

		@endif  --}}

	<div class="col-lg-12">
		<!--Form-->

		@if($kategori->id == 6)
			<form action="{{ URL::to('pengaduan/tunggakan') }}" method="post">
		@else
			<form action="{{ URL::to('pengaduan/') }}" method="post">
		@endif
			<input type="hidden" name="_token" value="{{csrf_token()}}" />

			<div class="card wow fadeInLeft">
				<div class="card-block">
					<!--Header-->
					<div class="text-xs-center">
						<h3><i class="fa fa-flash"></i> Pengaduan {{ $kategori->nama_kategori }}</h3>
						<hr>

					</div>

					<!--Body-->
					<div class="col-md-12">

						<input type="hidden" name="kategori_id" value="{{ $kategori->id }}">
						
						@if($kategori->id !=1 )
						<div class="md-form">
							<input type="text" name="user_id" id="form3" class="form-control" placeholder="ID Pelanggan">
						</div>						
						@endif

						<div class="md-form">
							<input type="text" name="nama_lengkap" id="form3" class="form-control" placeholder="Nama">
						</div>

						<div class="md-form">
							<textarea type="text" name="alamat" class="md-textarea" placeholder="Alamat"></textarea>
						</div>

						@if($kategori->id != 6)
						<div class="md-form">
							<select name="keluhan" class="mdb-select colorful-select dropdown-primary">
								<option value="">Keluhan</option>

								@if ($kategori->id == 1)
									<option value="sudah bayar namun belum nyala">sudah bayar namun belum nyala</option>
									<option value="penghuni kosong">penghuni kosong</option>
									<option value="perluasan jaringan(izin penanaman tiang)">perluasan jaringan(izin penanaman tiang)</option>
									<option value="permintaan paska bayar">permintaan paska bayar</option>
								@elseif ($kategori->id == 2)
									<option value="belum terpasang">belum terpasang</option>
									<option value="pagar terkunci">pagar terkunci</option>
									<option value="perluasan jaringan(izin penanaman tiang)">perluasan jaringan(izin penanaman tiang)</option>
									<option value="permintaan paska bayar">permintaan paska bayar</option>
									<option value="revisi daya">revisi daya</option>
								@elseif ($kategori->id == 3)
									<option value="manual periksa">manual periksa</option>
									<option value="tidak bisa beli token">tidak bisa beli token</option>
									<option value="tidak bisa entry keypad">tidak bisa entry keypad</option>
									<option value="boros(kwh meter)">boros(kwh meter)</option>
								@elseif ($kategori->id == 4)
									<option value="angka stan meter tidak sesuai">angka stan meter tidak sesuai</option>
									<option value="tagihan melunjak">tagihan melunjak</option>
									<option value="petugas tidak pernah baca meter">petugas tidak pernah baca meter</option>
									<option value="pintu pagar terkunci">pintu pagar terkunci</option>
								@elseif ($kategori->id == 5)
									<option value="belum tersambung">belum tersambung</option>
									<option value="revisi angsuran">revisi angsuran</option>
									<option value="informasi lain-lain">informasi lain-lain</option>
								@endif

							</select>
						</div>
						@endif
						
						@if($kategori->id == 6)
						
							<select name="keluhan" id="keluhan" class="browser-default form-control">
								<option value="">keluhan</option>
								<option value="keterlambatan bulan pembayaran">keterlambatan bulan pembayaran</option>
								<option value="tidak bisa membayar rekening">tidak bisa membayar rekening</option>
							</select>

							<input type="hidden" name="pengaduan_id" value="{{ $id }}">

							<div id="bulan" style="display: none;">
								<select name="bulan" class="browser-default form-control">
									<option value="">bulan</option>
									
									@for($i=1; $i<=12; $i++)
										<option value="{{ $i }}">Bulan ke {{ $i }}</option>
									@endfor
									
								</select>
							</div>

							<div id="pilihan" style="display: none;">
								<select name="pilihan" id="pilihan2" class="browser-default form-control">
									<option value="">pilihan</option>
									<option value="mutasi n">mutasi n</option>
									<option value="belum termutasi">belum termutasi</option>
								</select>
							</div>

							<div id="mutasin" style="display: none;">
								<select name="mutasin" id="mutasin2" class="browser-default form-control">
									<option value="">pilihan</option>
									<option value="piutang ragu-ragu (prr)">piutang ragu-ragu (prr)</option>
									<option value="penghapusan">penghapusan</option>
								</select>
							</div>

							<div id="status" style="display: none;">
								<select name="status" id="status2" class="browser-default form-control">
									<option value="">status</option>
									<option value="bayar">bayar</option>
									<option value="belum bayar">belum bayar</option>
								</select>
							</div>

							<div id="pilihan3" style="display: none;">
								<select name="pilihan3" id="pilihan4" class="browser-default form-control">
									<option value="">pilihan</option>
									<option value="pasang baru">pasang baru</option>
									<option value="belum pasang baru">belum pasang baru</option>
								</select>
							</div>

							
						@endif

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

		//keluhan
		document.getElementById('keluhan').addEventListener('change', function () {
    		var style = this.value == "keterlambatan bulan pembayaran" ? 'block' : 'none';
    		document.getElementById('bulan').style.display = style;
			document.getElementById('mutasin').style.display = 'none';
			document.getElementById('status').style.display = 'none';
			document.getElementById('pilihan3').style.display = 'none';

			var style2 = this.value == "tidak bisa membayar rekening" ? 'block' : 'none';
    		document.getElementById('pilihan').style.display = style2;

		});

		//pilihan
		document.getElementById('pilihan2').addEventListener('change', function () {
    		var style3 = this.value == "mutasi n" ? 'block' : 'none';
    		document.getElementById('mutasin').style.display = style3;
			document.getElementById('status').style.display = 'none';
		});

		//mutasi n
		document.getElementById('mutasin2').addEventListener('change', function () {
    		var style4 = this.value == "piutang ragu-ragu (prr)" ? 'block' : 'none';
    		document.getElementById('status').style.display = style4;

			var style5 = this.value == "penghapusan" ? 'block' : 'none';
    		document.getElementById('pilihan3').style.display = style5;
		});
	});

	</script>
@endsection
