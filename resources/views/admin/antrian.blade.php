@extends('admin/admin_template')

@section('css')
  <link rel="stylesheet" href="{{ URL::to('bower_components/datatables/media/css/dataTables.bootstrap4.css') }}">
@endsection

@section('section1')

  <table class="table" id="dataTable" cellspacing="0" width="100%">
    <thead>
      <tr>
        {{--  <th>#</th>  --}}
        <th>Nomor Antrian</th>
        <th>Tgl Antrian</th>
        <th>opsi</th>
      </tr>
    </thead>

    <tbody>
      {{--*/ $i=1 /*--}}
      @foreach ($antrian as $element)
        <tr>
          {{--  <td>{{ $element['id'] }}</td>  --}}
          <td>{{ $element['nomor_antrian'] }}</td>
          <td>{{ $element['tgl_antrian'] }}</td>
          <td>
            
              <audio id="suarabel" src="{{ URL::to('sound/Airport_Bell.MP3') }}"  ></audio>
              <audio id="suarabelnomorurut" src="{{ URL::to('sound/nomor-urut.MP3') }}"  ></audio>

              <audio id="belas" src="{{ URL::to('sound/belas.MP3') }}"  ></audio>
              <audio id="sebelas" src="{{ URL::to('sound/sebelas.MP3') }}"  ></audio>
              <audio id="puluh" src="{{ URL::to('sound/puluh.MP3') }}"  ></audio>
              <audio id="sepuluh" src="{{ URL::to('sound/sepuluh.MP3') }}"  ></audio>
              <audio id="ratus" src="{{ URL::to('sound/ratus.MP3') }}"  ></audio>
              <audio id="ribu" src="{{ URL::to('sound/ribu.MP3') }}"  ></audio>
              <audio id="seratus" src="{{ URL::to('sound/seratus.MP3') }}"  ></audio>
              <audio id="suarabelloket{{ $i }}" src="{{ URL::to('sound/'.$element['nomor_antrian'].'.MP3') }}"></audio>

              {{--*/ $long= strlen($element['nomor_antrian']) /*--}}
              @for($j=0;$j<$long;$j++)
              <audio id="suarabel{{ $i.$j.$i }}" src="{{ URL::to('sound/'.substr($element['nomor_antrian'],$j,1)).'.MP3' }}" ></audio>      
              {{--*/ $in= $j.",".$i  /*--}}
              @endfor

              {{ $in }}

              <script type="text/javascript">
                function mulai(){

                    // MAIN BEL PADA AWAL
                    // document.getElementById('suarabel').pause();
                    // document.getElementById('suarabel').currentTime=0;
                    // document.getElementById('suarabel').play();

                    //SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT  
                    // totalwaktu=document.getElementById('suarabel').duration*1000;
                    totalwaktu = 1;

                    //MAINKAN SUARA NOMOR URUT  
                    setTimeout(function() {
                      document.getElementById('suarabelnomorurut').pause();
                      document.getElementById('suarabelnomorurut').currentTime=0;
                      document.getElementById('suarabelnomorurut').play();
                    }, totalwaktu);
                    totalwaktu=totalwaktu+1000;

                    // JIKA KURANG DARI 10
                    @if($element['nomor_antrian']<10)
                    setTimeout(function() {
                      document.getElementById('suarabelloket{{ $i }}').pause();
                      document.getElementById('suarabelloket{{ $i }}').currentTime=0;
                      document.getElementById('suarabelloket{{ $i }}').play();
                      }, totalwaktu);
                    totalwaktu=totalwaktu+1000;

                    {{--  PASS SEPULUH  --}}
                    @elseif($element['nomor_antrian']==10)
                       setTimeout(function() {
                        document.getElementById('sepuluh').pause();
                        document.getElementById('sepuluh').currentTime=0;
                        document.getElementById('sepuluh').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;

                    {{--  PAS SEBELAS  --}}
                    @elseif($element['nomor_antrian']==11)
                      setTimeout(function() {
                        document.getElementById('sebelas').pause();
                        document.getElementById('sebelas').currentTime=0;
                        document.getElementById('sebelas').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;
                    
                    {{--  KURANG DARI 20  --}}
                    @elseif($element['nomor_antrian']<20)
                      setTimeout(function() {
                        document.getElementById('suarabel1{{ $i }}').pause();
                        document.getElementById('suarabel1{{ $i }}').currentTime=0;
                        document.getElementById('suarabel1{{ $i }}').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;
                      setTimeout(function() {
                        document.getElementById('belas').pause();
                        document.getElementById('belas').currentTime=0;
                        document.getElementById('belas').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;

                    {{--  KURANG DARI 100  --}}
                    @elseif($element['nomor_antrian']<100)
                      setTimeout(function() {
                        document.getElementById('suarabel{{ $i }}0{{ $i }}').pause();
                        document.getElementById('suarabel{{ $i }}0{{ $i }}').currentTime=0;
                        document.getElementById('suarabel{{ $i }}0{{ $i }}').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;
                      setTimeout(function() {
                        document.getElementById('puluh').pause();
                        document.getElementById('puluh').currentTime=0;
                        document.getElementById('puluh').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;
                      setTimeout(function() {
                        document.getElementById('suarabel{{ $i }}1{{ $i }}').pause();
                        document.getElementById('suarabel{{ $i }}1{{ $i }}').currentTime=0;
                        document.getElementById('suarabel{{ $i }}1{{ $i }}').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;

                    {{--  PASS SERATUS  --}}
                    @elseif($element['nomor_antrian']==100)
                       setTimeout(function() {
                        document.getElementById('seratus').pause();
                        document.getElementById('seratus').currentTime=0;
                        document.getElementById('seratus').play();
                      }, totalwaktu);
                      totalwaktu=totalwaktu+1000;
                    @endif
                    
                    setTimeout(function() {
                      document.getElementById('suarabel').pause();
                      document.getElementById('suarabel').currentTime=0;
                      document.getElementById('suarabel').play();
                    }, totalwaktu);
                    totalwaktu=totalwaktu+1000;

                }
              </script>

              <div class="center text-xs-center">
              <button type="button" onClick="mulai();" class="btn btn-sm btn-info">
                <i class="fa fa-volume-up" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn btn-sm btn-success" onClick="document.location.reload(true)" >
                <i class="fa fa-long-arrow-right"></i> Selanjutnya
              </button>
            </div>
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
  <script type="text/javascript">
  $(document).ready(function(){
    // $('#dataTable').DataTable();

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });  
  });

  </script>
@endsection
