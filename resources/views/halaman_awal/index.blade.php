@extends('template')

@section('header')
	<!--Mask-->
	<div class="view hm-black-strong">
			<div class="full-bg-img flex-center">
					<div class="container">
	<div class="row" id="home">

									<!--First column-->
									<div class="col-lg-6">
											<div class="description">
													<h2 class="h2-responsive wow fadeInLeft">
												Selamat Datang di Situs resmi PLN
													</h2>
													<hr class="hr-dark">
													<p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
													<br>
													<a class="btn btn-outline-white btn-lg wow fadeInLeft" data-wow-delay="0.7s">Lihat Selengkapnya</a>

											</div>
									</div>
									<!--/.First column-->

									<!--Second column-->
									<div class="col-lg-4 offset-lg-1 flex-center">
											<!--Form-->
											<img src="{{ URL::to('bower_components/img/Asset3.png') }}" alt="" class="img-fluid wow fadeInRight" id="app-mockup">
											<!--/.Form-->
									</div>
									<!--/Second column-->
							</div>
					</div>
			</div>
	</div>
	<!--/.Mask-->
@endsection

@section('konten1')


	<!--Section: Magazine v.1-->
	<section class="section magazine-section">

	    <!--First row-->
	    <div class="row text-left">

	        <!--First column-->
	        <div class="col-lg-8 col-md-12">

						<section class="section magazine-section">
							<!--Section heading-->
					    <h1 class="section-heading"><i class="fa fa-download"></i> Berita</h1>

						<hr>

	            <!--Featured news-->
	            <div class="single-news">

	                <!--Image-->
	                <div class="view overlay hm-white-slight">
	                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(27).jpg">
	                    <a>
	                        <div class="mask"></div>
	                    </a>
	                </div>

	                <!--Excerpt-->
	                <div class="news-data">
	                    <a href="" class="light-blue-text"><h5><i class="fa fa-plane"></i> Travels</h5></a>
	                    <p><strong><i class="fa fa-clock-o"></i> 20/08/2016</strong></p>
	                </div>
	                <h3><a>Top 5 places in Italy you need to visit.</a></h3>
	                <p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
	                </p>

	            </div>
	            <!--/Featured news-->

	            <!--Small news-->
	            <div class="single-news">

	                <div class="row">
	                    <div class="col-md-3">

	                        <!--Image-->
	                        <div class="view overlay hm-white-slight">
	                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(82).jpg">
	                            <a>
	                                <div class="mask"></div>
	                            </a>
	                        </div>
	                    </div>

	                    <!--Excerpt-->
	                    <div class="col-md-9">
	                        <p><strong>19/08/2016</strong></p>
	                        <a>A journey through the woods.
	                            <i class="fa fa-angle-right"></i>
	                        </a>
	                    </div>

	                </div>
	            </div>
	            <!--/Small news-->

	            <!--Small news-->
	            <div class="single-news">

	                <div class="row">
	                    <div class="col-md-3">

	                        <!--Image-->
	                        <div class="view overlay hm-white-slight">
	                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(69).jpg">
	                            <a>
	                                <div class="mask"></div>
	                            </a>
	                        </div>
	                    </div>

	                    <!--Excerpt-->
	                    <div class="col-md-9">
	                        <p><strong>18/08/2016</strong></p>
	                        <a>How to start surfing in Hawaii?
	                            <i class="fa fa-angle-right"></i>
	                        </a>
	                    </div>

	                </div>
	            </div>
	            <!--/Small news-->

	            <!--Small news-->
				<div class="single-news">

	                <div class="row">
	                    <div class="col-md-3">

	                        <!--Image-->
	                        <div class="view overlay hm-white-slight">
	                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(25).jpg">
	                            <a>
	                                <div class="mask"></div>
	                            </a>
	                        </div>
	                    </div>

	                    <!--Excerpt-->
	                    <div class="col-md-9">
	                        <p><strong>17/08/2016</strong></p>
	                        <a>7 reasons why you need to see San Francisco.
	                            <i class="fa fa-angle-right"></i>
	                        </a>
	                    </div>

	                </div>
	            </div>
	            <!--/Small news-->

						</section>

	        </div>
	        <!--/First column-->

	        <!--Second column-->
	        <div class="col-lg-4 col-md-12">

						<section class="section magazine-section">

							<!--Section heading-->
					    <h1 class="section-heading">Berita</h1>

	            <!--Featured news-->
	            <div class="single-news">

	                <!--Image-->
	                <div class="view overlay hm-white-slight">
	                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20(90).jpg">
	                    <a>
	                        <div class="mask"></div>
	                    </a>
	                </div>

	                <!--Excerpt-->
	                <div class="news-data">
	                    <a href="" class="red-text"><h5 class="purple-text"><i class="fa fa-money"></i> Business</h5></a>
	                    <p><strong><i class="fa fa-clock-o"></i> 24/08/2016</strong></p>
	                </div>

	                <h3><a>How to start PR career in New York?</a></h3>

	                <p>Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo.
	                </p>

	            </div>
	            <!--/Featured news-->



	            <!--Small news-->
	            <div class="single-news">

	                <div class="row">
	                    <div class="col-md-3">

	                        <!--Image-->
	                        <div class="view overlay hm-white-slight">
	                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(9).jpg">
	                            <a>
	                                <div class="mask"></div>
	                            </a>
	                        </div>
	                    </div>

	                    <!--Excerpt-->
	                    <div class="col-md-9">
	                        <p><strong>23/08/2016</strong></p>
	                        <a>Find the best office in San Francisco.
	                            <i class="fa fa-angle-right"></i>
	                        </a>
	                    </div>

	                </div>
	            </div>
	            <!--/Small news-->

	            <!--Small news-->
	            <div class="single-news">

	                <div class="row">
	                    <div class="col-md-3">

	                        <!--Image-->
	                        <div class="view overlay hm-white-slight">
	                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(30).jpg">
	                            <a>
	                                <div class="mask"></div>
	                            </a>
	                        </div>
	                    </div>

	                    <!--Excerpt-->
	                    <div class="col-md-9">
	                        <p><strong>22/08/2016</strong></p>
	                        <a>Top 6 startups from Berlin.
	                            <i class="fa fa-angle-right"></i>
	                        </a>
	                    </div>

	                </div>
	            </div>
	            <!--/Small news-->

	            <!--Small news-->
	            <div class="single-news">

	                <div class="row">
	                    <div class="col-md-3">

	                        <!--Image-->
	                        <div class="view overlay hm-white-slight">
	                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(30).jpg">
	                            <a>
	                                <div class="mask"></div>
	                            </a>
	                        </div>
	                    </div>

	                    <!--Excerpt-->
	                    <div class="col-md-9">
	                        <p><strong>21/08/2016</strong></p>
	                        <a>Marketing for luxury products.
	                            <i class="fa fa-angle-right"></i>
	                        </a>
	                    </div>

	                </div>
	            </div>
	            <!--/Small news-->

						</section>

	        </div>
	        <!--/Second column-->

	    </div>
	    <!--/First row-->

	</section>
	<!--/Section: Magazine v.1-->


@stop

@section('konten2')

@stop
