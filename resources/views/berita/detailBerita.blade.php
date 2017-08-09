@extends('template')

{{-- SECTION 1 --}}
@section('section1')
	<!--Main layout-->
	<main>
			<div class="container-fluid">
					<div class="row">

							<!--Post column-->
							<div class="col-md-8">

									<!--Section: Post-->
									<section class="section section-blog-fw">

											<!--First row-->
											<div class="row">

													<div class="col-md-12 wow fadeInUp">

															<!--Featured image-->
															<img src="{{ URL::to('news/'.$data['gambar']) }}">

															<!--Post data-->
															<div class="jumbotron wow fadeInUp" data-wow-delay="0.2s">
																	<h2>{{ $data['judul'] }}</h2>
																	 <p class="blue-text"> <i class="fa fa-calendar "></i> {{ $data['created_at'] }}</p>

															</div>
															<!--/Post data-->

															<!--Post text-->
															<div class="post-text">
																	<p>{{ $data['isi'] }}
																	</p>
															</div>
															<!--/Post text-->

															<hr>

													</div>

											</div>
											<!--/First row-->

									</section>
									<!--/Section: Post-->

							</div>
							<!--/Post column-->
					</div>
			</div>
	</main>
	<!--/Main layout-->
@stop
{{-- SECTION 1 --}}
