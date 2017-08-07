@extends('../admin/admin_template')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('bower_components/datatables/media/css/dataTables.bootstrap4.css') }}">
@endsection

@section('section1')


  <!-- Modal -->
  <div class=" " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Ubah Berita</h4>
        </div>
        <!--Body-->
        <div class="modal-body">
          <form class="" action="{{ url::to('administrator/berita-ubah/'.$id) }}" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="md-form">
              <input type="text" name="judul" id="form3" class="form-control" value="{{ $data['judul'] }}">
            </div>

            <div class="file-field">
              <div class="btn btn-primary btn-sm">
                <span>Pilih gambar</span>
                <input name="file_gambar" type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" name="gambar" type="text" value="{{ $data['gambar'] }}">
              </div>
            </div>

            <div class="md-form">
              <textarea type="text" name="isi" class="md-textarea" placeholder="isi">{{ $data['isi'] }}</textarea>
            </div>

         
        </div>
        <!--Footer-->
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-success">Ubah</button>
        </div>
         </form>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!-- /.Live preview-->

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
