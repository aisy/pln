@extends('admin/admin_template')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('bower_components/datatables/media/css/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ URL::to('bower_components/css/daterangepicker.css') }}">
@endsection

@section('section1')

  {{--  <div class="md-form">
  <input placeholder="Pilih Tanggal awal" type="text" id="date-picker-mulai" class="form-control datepicker">

</div>  --}}

{{--  <div class="md-form">
<input placeholder="Pilih Tanggal akhir" type="text" id="date-picker-selesai" class="form-control datepicker">

</div>  --}}

<table class="table" id="dataTable" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Pengadu</th>
      <th>Id User</th>
      <th>Alamat</th>
      <th>Tanggal</th>
      <th>Status</th>
      <th>opsi</th>
    </tr>
  </thead>

  <tbody>
    {{--*/ $i=1 /*--}}
    @foreach ($data as $element)
      <tr>
        <td>{{ $i }}</td>
        <td>{{ $element['nama_lengkap'] }}</td>
        <td>{{ $element['user_id'] }}</td>
        <td>{{ $element['alamat'] }}</td>
        <td>{{ str_limit($element['created_at'], 10, '') }}</td>
        <td>{{ $element['status'] }}</td>
          <td>
            <a href="{{ URL::to('administrator/konf-pengaduan/'.$element['id']) }}" class="btn btn-sm btn-success">
              <i class="fa fa-check"></i>
            </a>
            {!! Form::open(['method'=>'DELETE','route'=>['pengaduan.hapus_data.delete',$element['id'] ] ]) !!}
            {!! Form::button('<i class="fa fa-trash-o"></i>', ['type'=>'submit','class'=>'btn btn-sm btn-danger']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
    {{--*/ $i++; /*--}}
    @endforeach
  </tbody>

  </table>
@endsection

@section('js')
  <script src="{{ URL::to('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>
  <script src="{{ URL::to('bower_components/datatables/media/js/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/moment.min.js') }}"></script>
  <script src="{{ URL::to('bower_components/js/daterangepicker.js') }}"></script>
  <script type="text/javascript">

  $(document).ready(function(){
    // Data Picker Initialization
    //$('.datepicker').pickadate({
    //format: 'yyyy-mm-dd',
    //selectMonths: true,
    //});

    //var table = $('#dataTable').DataTable();

      var table = $('#dataTable').DataTable({
        "dom": '<"toolbar">frtip'
      });
      $("div.toolbar").html('<input id="date_range" type="text" placeholder="Urutkan berdasarkan tanggal">');
      //END of the data table

      // Date range script - Start of the sscript
      $("#date_range").daterangepicker({
        autoUpdateInput: false,
        locale: {
          "cancelLabel": "Clear",
        }
      });

      $("#date_range").on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
        table.draw();
      });

      $("#date_range").on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
        table.draw();
      });
      // Date range script - END of the script

      $.fn.dataTableExt.afnFiltering.push(
        function( oSettings, aData, iDataIndex ) {

          var grab_daterange = $("#date_range").val();
          var give_results_daterange = grab_daterange.split(" to ");
          var filterstart = give_results_daterange[0];
          var filterend = give_results_daterange[1];
          var iStartDateCol = 4; //using column 2 in this instance
          var iEndDateCol = 4;
          var tabledatestart = aData[iStartDateCol];
          var tabledateend= aData[iEndDateCol];

          if ( !filterstart && !filterend )
          {
            return true;
          }
          else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isBefore(tabledatestart)) && filterend === "")
          {
            return true;
          }
          else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isAfter(tabledatestart)) && filterstart === "")
          {
            return true;
          }
          else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isBefore(tabledatestart)) && (moment(filterend).isSame(tabledateend) || moment(filterend).isAfter(tabledateend)))
          {
            return true;
          }
          return false;
        }
      );

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });

    // Event listener to the two range filtering inputs to redraw on input
    //$('#date-picker-mulai, #date-picker-selesai').keyup( function() {
    //  table.draw();
    //} );

  });
  </script>
@endsection
