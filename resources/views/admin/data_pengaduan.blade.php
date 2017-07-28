@extends('admin/admin_template')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('bower_components/datatables/media/css/dataTables.bootstrap4.css') }}">
@endsection

@section('section1')

  <table class="table" id="dataTable" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Pengadu</th>
        <th>Id User</th>
        <th>Alamat</th>
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
          <td>
            <button type="button" class="btn btn-sm btn-success">
              <i class="fa fa-check"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger">
              <i class="fa fa-trash-o"></i>
            </button>
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
  $(document).ready(function(){
    $('#dataTable').DataTable();

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
  })
  </script>
@endsection
