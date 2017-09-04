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
        <th>Alamat</th>
        <th>:</th>
        <th>{{ $data->alamat }}</th>
    </tr>
    <tr>
        <th>Keluhan</th>
        <th>:</th>
        <th>{{ $data->keluhan }}</th>
    </tr>
     @if($data->status=="sudah di verifikasi" || $data->status=="sudah di tindak lanjut")
      {{--*/ $status = explode(" ", $data->status) /*--}}
      <tr>
        <th>{{ $status[2] }}</th> 
        <th>:</th>
        <th>{{ $data->status }}</th>
      </tr> 
     @endif
</table>

<br>
  @if($data->status=="sudah di verifikasi" || $data->status=="sudah di tindak lanjut")
      <a href="{{ URL::to('administrator/ubah-pengaduan/'.$id) }}" class="btn btn-warning">Ubah</a>
  @else
<form action="{{ URL::to('administrator/konf-pengaduan/proses') }}" method="POST">
  <input name="_method" type="hidden" value="PATCH">
  <input type="hidden" name="_token" value="{{csrf_token()}}" />

  <input type="hidden" name="id_pengaduan" value="{{ $id }}" />
  

      @if(Session::get('session')->level == "admin")
        <div class="md-form">
          <textarea type="text" name="verifikasi" class="md-textarea" placeholder="verifikasi"></textarea>
        </div>    
        <input type="hidden" name="status" value="sudah di verifikasi" />
      @endif
      

      @if (Session::get('session')->level == "transaksi energi" || Session::get('session')->level == "pelayanan pelanggan")
      <div class="md-form">
          <textarea type="text" name="tindak_lanjut" class="md-textarea" placeholder="tindak_lanjut"></textarea>
      </div>
      <input type="hidden" name="status" value="sudah di tindak lanjut" />
      @endif



  <div class="text-xs-center">
		<button type="submit" class="btn btn-ins btn-lg">Simpan</button>
	</div>

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
  })
  </script>
@endsection
