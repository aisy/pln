@extends('../admin/admin_template')

@section('header_class')
	normal-header
@endsection

@section('section1')
	<section class="section">

	<div class="col-lg-12">
		<!--Form-->

		<form action="{{ URL::to('administrator/ubah-pengaduan/'.$data->id) }}" method="post">
		
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
           <input name="_method" type="hidden" value="PATCH">

			<div class="card wow fadeInLeft">
				<div class="card-block">
					<!--Body-->
					<div class="col-md-12">

						<input type="hidden" name="kategori_id" value="{{ $data->kategori_id }}">
						
                        @if($data->user_id!=1)    
						<div class="md-form">
							<input type="text" name="user_id" id="form2" class="form-control" value="{{ $data->user_id }}" disabled="disabled">
                            <label for="form2">ID Pelanggan</label>
                        </div>						
                        @endif

						<div class="md-form">
							<input type="text" name="nama_lengkap" id="form3" class="form-control" value="{{ $data->nama_lengkap }}" disabled="disabled">
                            <label for="form3">Nama Lengkap</label>
                        </div>

						<div class="md-form">
							<textarea type="text" id="form4" name="alamat" class="md-textarea" disabled="disabled">{{ $data->alamat }}</textarea>
                            <label for="form4">Alamat</label>
                        </div>

                        {{--  @if($data->status=="sudah di verifikasi")  --}}
                             <div class="md-form">
                                <textarea type="text" id="form5" name="verifikasi" class="md-textarea" placeholder="verifikasi">{{ $data->verifikasi }}</textarea>
                                <label for="form5">Verifikasi</label>
                             </div> 
                        {{--  @elseif($data->status=="sudah di tindak lanjut")  --}}
                             <div class="md-form">
                                <textarea type="text" id="form5" name="tindak_lanjut" class="md-textarea" placeholder="tindak_lanjut">{{ $data->tindak_lanjut }}</textarea>
                                <label for="form5">Tindak Lanjut</label>
                            </div>
                        {{--  @endif  --}}

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
@endsection
