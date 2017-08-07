@extends('admin/admin_template')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('bower_components/datatables/media/css/dataTables.bootstrap4.css') }}">
@endsection

@section('section1')

  <div class="md-form">
    <input placeholder="Pilih Tanggal awal" type="text" id="date-picker-mulai" class="form-control datepicker">
    {{--  <label for="date-picker-example">Tanggal Awal</label>  --}}
</div>

<div class="md-form">
    <input placeholder="Pilih Tanggal akhir" type="text" id="date-picker-selesai" class="form-control datepicker">
    {{--  <label for="date-picker-example">Tanggal Akhir</label>  --}}
</div>

  <table class="table" id="dataTable" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Pengadu</th>
        <th>Id User</th>
        <th>Alamat</th>
        <th>Tanggal</th>
        <th>opsi</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $element)
        <tr>
          <td>{{ $element['id'] }}</td>
          <td>{{ $element['nama_lengkap'] }}</td>
          <td>{{ $element['user_id'] }}</td>
          <td>{{ $element['alamat'] }}</td>
          <td>{{ str_limit($element['created_at'], 10, '') }}
          <td>
            <button type="button" class="btn btn-sm btn-success">
              <i class="fa fa-check"></i>
            </button>
            {!! Form::open(['method'=>'DELETE','route'=>['pengaduan.hapus_data.delete',$element['id'] ] ]) !!}
						{!! Form::button('<i class="fa fa-trash-o"></i>', ['type'=>'submit','class'=>'btn btn-sm btn-danger']) !!}
						{!! Form::close() !!}
          </td>
        </tr>
      @endforeach
    </tbody>

  </table>
@endsection

@section('js')
  <script src="{{ URL::to('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>
  <script src="{{ URL::to('bower_components/datatables/media/js/dataTables.bootstrap4.js') }}"></script>
  <script type="text/javascript">

  $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#date-picker-mulai').val() );
        var max = parseInt( $('#date-picker-akhir').val() );
        var age = parseFloat( data[3] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
  );

  $(document).ready(function(){
    // Data Picker Initialization
    $('.datepicker').pickadate({
      format: 'yyyy-mm-dd',
      selectMonths: true,
    });

    var table = $('#dataTable').DataTable();

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })

    // Event listener to the two range filtering inputs to redraw on input
    $('#date-picker-mulai, #date-picker-selesai').keyup( function() {
        table.draw();
    } );

  })
  </script>
@endsection
