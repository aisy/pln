@extends('admin/admin_template')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('bower_components/datatables/media/css/dataTables.bootstrap4.css') }}">
@endsection

@section('section1')

  <!-- Button trigger modal -->
  <div class="center text-xs-center">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      <i class="fa fa-plus-circle"></i> Tambah Berita
    </button>
  </div>

  <hr>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Tambah Berita</h4>
        </div>
        <!--Body-->
        <div class="modal-body">
          <form class="" action="berita-tambah" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="md-form">
              <input type="text" name="judul" id="form3" class="form-control" placeholder="Judul">
            </div>

            <div class="file-field">
              <div class="btn btn-primary btn-sm">
                <span>Pilih gambar</span>
                <input name="file_gambar" type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" name="gambar" type="text" placeholder="Pilih Gambar Headline">
              </div>
            </div>

            <div class="md-form">
              <textarea type="text" name="isi" class="md-textarea" placeholder="isi"></textarea>
            </div>

         
        </div>
        <!--Footer-->
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
         </form>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- /.Live preview-->

  <table class="table" id="dataTable" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>opsi</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($berita as $element)
        <tr>
          <td>{{ $element['id'] }}</td>
          <td><img src="{{ URL::to("news")."/".$element['gambar'] }}" heigth="250" width="250" class="img-responsive" alt="Image"></td>
          <td>{{ $element['judul'] }}</td>
          <td>
            <a href="{{ url('administrator/berita-ubah/'.$element['id']) }}" type="button" class="btn btn-sm btn-warning">
              <i class="fa fa-edit"></i>
            </a>
            
            {!! Form::open(['method'=>'DELETE','route'=>['berita.hapus_data.delete',$element['id'] ] ]) !!}
							{!! Form::button('<i class="fa fa-times"></i>', ['type'=>'submit','class'=>'btn btn-sm btn-danger']) !!}
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
  $(document).ready(function(){
    $('#dataTable').DataTable();

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    })
  })
  </script>
@endsection
