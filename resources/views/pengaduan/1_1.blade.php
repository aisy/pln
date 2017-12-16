@extends('template') @section('header_class') normal-header @endsection @section('section1')
<section class="section">

	{{-- @if(Session::has('flash_message'))

	<div class="center text-xs-center">
		<div class="chip success-color">
			<p class="white-text">{{ session('flash_message') }}</p>
			<i class="close fa fa-times"></i>
		</div>
	</div>

	@endif --}}

	<div class="col-lg-12">
		<!--Form-->

		@if($id == 3)
  		<form action="{{ URL::to('pengaduan/tunggakan') }}" method="POST">
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

						
						<div class="md-form">
							<select id="keluhan" name="keluhan" class="browser-default form-control">
								<option value="">Keluhan</option>

								@if ($kategori->id == 1)
									<option value="sudah bayar namun belum nyala">sudah bayar namun belum nyala</option>
									<option value="penghuni kosong">penghuni kosong</option>
									<option value="perluasan jaringan(izin penanaman tiang)">perluasan jaringan(izin penanaman tiang)</option>
									<option value="permintaan paska bayar">permintaan paska bayar</option>
									<option value="lain_lain">Lain - lain</option>
								@elseif ($kategori->id == 2)
									<option value="belum terpasang">belum terpasang</option>
									<option value="pagar terkunci">pagar terkunci</option>
									<option value="perluasan jaringan(izin penanaman tiang)">perluasan jaringan(izin penanaman tiang)</option>
									<option value="permintaan paska bayar">permintaan paska bayar</option>
									<option value="revisi daya">revisi daya</option>
									<option value="lain_lain">Lain - lain</option>
								@elseif ($kategori->id == 6)
									<option value="manual periksa">manual periksa</option>
									<option value="tidak bisa beli token">tidak bisa beli token</option>
									<option value="tidak bisa entry keypad">tidak bisa entry keypad</option>
									<option value="boros(kwh meter)">boros(kwh meter)</option>
									<option value="lain_lain">Lain - lain</option>
								@elseif ($kategori->id == 4)
									<option value="angka stan meter tidak sesuai">angka stan meter tidak sesuai</option>
									<option value="tagihan melunjak">tagihan melunjak</option>
									<option value="petugas tidak pernah baca meter">petugas tidak pernah baca meter</option>
									<option value="pintu pagar terkunci">pintu pagar terkunci</option>
									<option value="lain_lain">Lain - lain</option>
								@elseif ($kategori->id == 5)
									<option value="belum tersambung">belum tersambung</option>
									<option value="revisi angsuran">revisi angsuran</option>
									<option value="lain_lain">Lain - lain</option>
								@elseif($kategori->id==3)	
									<option value="keterlambatan bulan pembayaran">keterlambatan bulan pembayaran</option>
									<option value="tidak bisa membayar rekening">tidak bisa membayar rekening</option>
									<option value="lain_lain">Lain - lain</option>
								@endif

							</select>
						</div>

						<div id="bulan" style="display: none;">
							<select name="bulan" class="browser-default form-control">
								<option value="">Berapa bulan</option>
								
								@for($i=1; $i<=5; $i++)
									<option value="{{ $i }}">{{ $i }} Bulan</option>
								@endfor
							</select>
							
						</div>

						<div id="status" style="display: none;">
							<select name="status_kwh" class="browser-default form-control">
								<option value="">Status KWH</option>
								<option value="KWH meter sudah di bongkar">KWH meter sudah di bongkar</option>
								<option value="KWH meter belum di bongkar">KWH meter belum di bongkar</option>
							</select>
							
							<select name="status_app" class="browser-default form-control">
								<option value="">Status APP</option>
								<option value="APP sudah di bongkar">APP sudah di bongkar</option>
								<option value="APP belum di bongkar">APP belum di bongkar</option>
							</select>
						</div>

						<div id="lain2" style="display: none;">
							<textarea type="text" name="lain_lain" class="md-textarea" placeholder="Sertakan keterangan pengaduan..."></textarea>
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
@endsection @section('js')
<script type="text/javascript">
	$(document).ready(function () {
		$('.mdb-select').material_select();
	});

	//keluhan
		document.getElementById('keluhan').addEventListener('change', function () {
    		var style = this.value == "keterlambatan bulan pembayaran" ? 'block' : 'none';
    		document.getElementById('bulan').style.display = style;
			document.getElementById('status').style.display = style;

		});

	//Lain lain
		document.getElementById('keluhan').addEventListener('change', function(){
			var style = this.value == "lain_lain" ? 'block' : 'none';
			document.getElementById('lain2').style.display = style;
		}); 
</script>
@endsection