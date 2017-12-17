@extends('../admin/admin_template')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('bower_components/datatables/media/css/dataTables.bootstrap4.css') }}">
@endsection

@section('section1')

<table>
    <tr>
        <th>Nama</th>
        <th>:</th>
        <th>{{ $data->nama_lengkap }}</th>
    </tr>
    <tr>
        <th>ID User</th>
        <th>:</th>
        <th>{{ $data->user_id }}</th>
    </tr>
    <tr>
        <th>Alamat</th>
        <th>:</th>
        <th>{{ $data->alamat }}</th>
    </tr>
    <tr>
        <th>Keluhan</th>
        <th>:</th>
        <th>{{ $data->keluhan }}</th>
    </tr>
     @if($data->status=="sudah di verifikasi" || $data->verifikasi!="")
      {{--*/ $status = explode(" ", $data->status) /*--}}
      <tr>
        <th>Verifikasi</th> 
        <th>:</th>
        <th>{{ $data->verifikasi }}</th>
      </tr> 
     @endif
     
</table>


<br>
  @if($data->status=="sudah di tindak lanjut")
      <a href="{{ URL::to('administrator/ubah-pengaduan/'.$id) }}" class="btn btn-warning">Ubah</a>
  @else
  
  @if($data->kategori_id == 3)
  <form action="{{ URL::to('administrator/tunggakan') }}" method="POST">
  @elseif($data->kategori_id!=3)
  <form action="{{ URL::to('administrator/konf-pengaduan/proses') }}" method="POST">
    <input name="_method" type="hidden" value="PATCH">
  @endif
  
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />

  <input type="hidden" name="id_pengaduan" value="{{ $id }}" />

      @if($data->status=="")
      @if($data->kategori_id == 3)
      <input type="hidden" name="pengaduan_id" value="{{ $id }}">

          @if($data->keluhan=="keterlambatan bulan pembayaran")
          <div id="bulan">

            <div class="md-form">
                <input name="bulan" value="{{ $detail->bulan }}" type="text" id="form6" class="form-control">
                <label class="active" for="form6">Bulan</label>
            </div>

            <div class="md-form">
                <input name="status_kwh" value="{{ $detail->status_kwh }}" type="text" id="form6" class="form-control">
                <label class="active" for="form6">Status kwh</label>
            </div>

            <div class="md-form">
                <input name="status_app" value="{{ $detail->status_app }}" type="text" id="form6" class="form-control">
                <label class="active" for="form6">Status app</label>
            </div>
            
          </div>
          @else
          <div id="pilihan">
            <select name="pilihan" id="pilihan2" class="browser-default form-control">
              <option value="">pilihan</option>
              <option value="mutasi n">mutasi n</option>
              <option value="belum termutasi">belum termutasi</option>
            </select>
          </div>
          @endif

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
        <div class="md-form">
          <textarea type="text" name="verifikasi" class="md-textarea" placeholder="verifikasi"></textarea>
        </div>    
      <input type="hidden" name="status" value="sudah di verifikasi" /> 

       <div class="text-xs-center">
		    <button type="submit" class="btn btn-ins btn-lg">Simpan</button>
	    </div> 

      @elseif($data->status=="sudah di verifikasi" || $data->status=="di proses petugas")
      @if(Session::get('session')->level == "customer service")
          Data Verfikasi sudah di kirim, tunggu dari pihak pelayanan pelanggan atau transaksi energy yang bertindak lanjut
      @else
      <div class="md-form">
          <textarea type="text" id="tindaklanjut" name="tindak_lanjut" class="md-textarea">{{ $data->tindak_lanjut }}</textarea>
          <label class="active" for="tindaklanjut"><strong>Jika awal menindak lanjutkan biarkan kosong</strong></label>
      </div>
      <br>
      <div class="md-form">
          <textarea type="text" id="formpertugas" name="laporan_petugas" class="md-textarea" placeholder="Laporan petugas"></textarea>
          <label class="active" for="formpetugas"><strong>Jika awal menindak lanjutkan biarkan kosong</strong></label>
      </div>
      <!-- <input type="hidden" name="status" value="sudah di tindak lanjut" /> -->
      <input type="hidden" name="status" value="sudah di tindak lanjut" />

      <div class="text-xs-center">
		    <button type="submit" class="btn btn-ins btn-lg">Simpan + pilih pegawai</button>
	    </div> 
      @endif
      @endif



 

</form>
  @endif

@endsection

@section('js')
  <script src="{{ URL::to('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>
  <script src="{{ URL::to('bower_components/datatables/media/js/dataTables.bootstrap4.js') }}"></script>
  <script type="text/javascript">
  $(document).ready(function(){

    $('#dataTable').DataTable();

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })

    // //keluhan
		// document.getElementById('keluhan').addEventListener('change', function () {
    // 		var style = this.value == "keterlambatan bulan pembayaran" ? 'block' : 'none';
    // 		document.getElementById('bulan').style.display = style;
		// 	document.getElementById('mutasin').style.display = 'none';
		// 	document.getElementById('status').style.display = 'none';
		// 	document.getElementById('pilihan3').style.display = 'none';

		// 	var style2 = this.value == "tidak bisa membayar rekening" ? 'block' : 'none';
    // 		document.getElementById('pilihan').style.display = style2;
		// });

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

  })
  </script>
@endsection
