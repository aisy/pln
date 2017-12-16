@extends('admin/admin_template');

@section('section1')
  <!--Section: Pricing v.1-->
  <section class="section">

    <!--First row-->
    <div class="row">

      @if (Session::get('session')->level == "customer service" || Session::get('session')->level == "pelayanan pelanggan")
        <!--First column-->
        <div class="col-lg-3 mb-1">

          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="fa fa-flash blue darken-3"></i>
              <div class="data">
                <p>Pasang Baru</p>
                <h3>{{ count($data1) }}</h3>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-block">
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Kelola data ada pada menu pengaduan</p>
              <a href="{{ URL::to('administrator/pengaduan/1') }}" type="button" class="btn btn-block btn-info" name="button">selengkapnya</a>
            </div>
            <!--/.Card content-->

          </div>

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-3 mb-1">

          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="fa fa-plus-circle deep-purple darken-4"></i>
              <div class="data">
                <p>Tambah Daya</p>
                <h3>{{ count($data2) }}</h3>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-block">
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Kelola data ada pada menu pengaduan</p>
              <a href="{{ URL::to('administrator/pengaduan/2') }}" type="button" class="btn btn-block btn-info" name="button">selengkapnya</a>
            </div>
            <!--/.Card content-->

          </div>

        </div>
        <!--/Second column-->

        <!--/Fourth column-->
        <div class="col-lg-3 mb-1">
          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="fa fa-money yellow"></i>
              <div class="data">
                <p>Tunggakan</p>
                <h3>{{ count($data6) }}</h3>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-block">
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Kelola data ada pada menu pengaduan</p>
              <a href="{{ URL::to('administrator/pengaduan/3') }}" type="button" class="btn btn-block btn-info" name="button">selengkapnya</a>
            </div>
            <!--/.Card content-->

          </div>
          </div>
        <!--/Fourth column-->


      @endif

      @if (Session::get('session')->level == "customer service" || Session::get('session')->level == "transaksi energi")

      <!--Fourth column-->
      <div class="col-lg-3 mb-1">

        <div class="card card-cascade cascading-admin-card">

          <!--Card Data-->
          <div class="admin-up">
            <i class="fa fa-dashboard purple"></i>
            <div class="data">
              <p>Baca Meter</p>
              <h3>{{ count($data4) }}</h3>
            </div>
          </div>
          <!--/.Card Data-->

          <!--Card content-->
          <div class="card-block">
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <!--Text-->
            <p class="card-text">Kelola data ada pada menu pengaduan</p>
            <a href="{{ URL::to('administrator/pengaduan/4') }}" type="button" class="btn btn-block btn-info" name="button">selengkapnya</a>
          </div>
          <!--/.Card content-->


      </div>
      </div>
      <!--/Fourth column-->

        <!--/Five column-->
        <div class="col-lg-3 mb-1">

          <div class="card card-cascade cascading-admin-card">

            <!--Card Data-->
            <div class="admin-up">
              <i class="fa fa-newspaper-o red"></i>
              <div class="data">
                <p>P2TL</p>
                <h3>{{ count($data5) }}</h3>
              </div>
            </div>
            <!--/.Card Data-->

            <!--Card content-->
            <div class="card-block">
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!--Text-->
              <p class="card-text">Kelola data ada pada menu pengaduan</p>
              <a href="{{ URL::to('administrator/pengaduan/5') }}" type="button" class="btn btn-block btn-info" name="button">selengkapnya</a>
            </div>
            <!--/.Card content-->

          </div>

        </div>
        <!--/Fourth column-->

         <!--Third column-->
      <div class="col-lg-3 mb-1">

        <div class="card card-cascade cascading-admin-card">

          <!--Card Data-->
          <div class="admin-up">
            <i class="fa fa-gears blue darken-3"></i>
            <div class="data">
              <p>LPB</p>
              <h3>{{ count($data3) }}</h3>
            </div>
          </div>
          <!--/.Card Data-->

          <!--Card content-->
          <div class="card-block">
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <!--Text-->
            <p class="card-text">Kelola data ada pada menu pengaduan</p>
            <a href="{{ URL::to('administrator/pengaduan/6') }}" type="button" class="btn btn-block btn-info" name="button">selengkapnya</a>
          </div>
          <!--/.Card content-->

        </div>

      </div>
      <!--/Third column-->

      @endif



    </div>
    <!--/First row-->

  </section>
  <!--/Section: Pricing v.1-->
@stop
