@extends('pages.master')
@section('content')
<div class="container">
	<!-- image carousel --> 
	<div id="owl-demo" class="owl-carousel" style="width:100%">
		<div class="item">	<!-- item image_1 -->
			<div class="img-area"> 
				<div class="img-holder">
					<img  class="image-responsive" src="images/slider/IMG_20150123_172346.jpg" alt="bali Image" width="600" height="800">
				</div>
			</div>	
			<div class="caption">
				<strong class="heading">welcome to</strong>
				<br><h1 align="center">Balibaawo </h1>
				<p class="owl-pgraph">for fracture problems</p>
			</div>
		</div> <!-- end of item_1 -->
		<div class="item"> <!-- item image_2-->
			<div class="img-area">
				<div class="img-holder">
					<img class="image-responsive" src="images/slider/IMG_20150123_120237.jpg" alt="bali Image" width="600" height="800">
				</div>
			</div>
			<div class="caption">
				<strong class="heading">and all your</strong>
				<br><h1>PHYSICAL THERAPY</h1> <p class="owl-pgraph">needs</p>
			</div>
		</div>  <!-- end of item_2-->
		<div class="item">
			<div class="img-area">
				<div class="img-holder">
					<img src="images/slider/WP_20160111_16_17_23_Pro.jpg" alt="bali Image" width="600" height="800">
				</div>
			</div>
			<div class="caption">
				<strong class="heading">it's a team effort</strong><br>
				<h1>TO GET YOU</h1><p class="owl-pgraph">back on your feet</p>
			</div>
		</div>
	</div>	<!-- end of owl-carousel -->
	
	<!-- main page content -->
	<main id="" role="main" class="home">
		<div class="container widgets">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3 col-sm-12"> <!--services column -->
					<div class="blogs" align="justify">
						<strong class="h3" id="services">Services We Offer</strong>
						<div>
							<blockquote>
								<ul class="service-list">
									<li>Rehabilitation care due to fractures</li>
									<li>Joint replacements</li>
									<li>General wound care</li>
									<li>General rehabilitation due to weakness or physical decline</li>
									<li>Bone placement</li>
									<li>Massage</li>
									<li>And many more physical therapy services</li>
								</ul>
							</blockquote>
						</div>
					</div>
				</div> <!-- end of column -->
				<section class="col-lg-3 col-lg-pull-6 col-xs-12 col-sm-6 media"> <!-- gallery thumbs -->
					<strong class="h3">Photo Gallery</strong>
					<div class="video-box">
						<h3><a href="{{ '/gallery' }}"><span class="fa fa-camera"></span>Meet Balibaawo Nursing Home in Pictures Here.</a></h3>
					</div>
						<ul class="thumbs">
						 	@for ($i=0; $i<6; $i++)
								<li>
									<a href="{{ url('/gallery') }}">
									<img src="images/gallery/{{ $images[$i]->image }}"><span class="arrow"></span>
									</a>
								</li>
							@endfor 
						</ul>

				</section> <!-- end of gallery thumbs section -->
				<div class="col-lg-3 col-sm-6 col-xm-12 upcoming-events">
					<strong class="h3">Who We Are</strong>
					<p>At Balibaawo Nursing Home, we help all our residents live life to the full. Our
					   dedicated, highly trained staff offer 24-hour nursing care in warm and friendly
					   atmosphere, with the emphasis on providing a high quality of life. We aim to provide
					   a home away from home. We offer privacy, enjoyment and convenience for all who choose
					   to live here</p>
				</div>
			</div> <!-- end of row-->

		</div>

		<div align="center"> <!-- small banner-->
			<header class="text-box" style="background-color: #9b2317;">
				<h3 style="font-size: 20px;color: #FFFFFF; text-transform: lowercase;">providing you with the professional care you need while you recover</h3>
			</header>
		</div>
		<!--testimonials-->
		<section class="services-container">
			<div class="tweets" align="justify">
				<div class="container text-center">
					<strong class="heading"><h2>Testimonials</h2></strong>
				</div>
				<div class="slideset">
					<blockquote>
								<q>
									The whole place is great. Workers and everyone. Thanks for your love.
									I would recommend you to everybody.<br>
									<strong>Sincerely Ronald Nathan</strong>
								</q>
							</blockquote>
							<blockquote>
								<q>
									As for the Therapy Dept, they can kid with you and themselves. But let me tell you when
									its business &amp; work - they are awesome. When I went to Balibaawo Nursing Home, I had
									not been able to climb in bed for 10 years. The weeks before I left I was getting in and
									out of bed by myself - Before that the aides had to lift my legs in bed. I could not do it.
									Your therapy group is the best. Thank you for everything.<br>
									<strong>K.K.James</strong>
								</q>
							</blockquote>

							<blockquote>
								<q>
									The family of Reagan J. would like to thank the staff for the care you gave mom when
									at B.N.H. Your kindness was greatly appreciated and shall not be forgotten.<br>
									<strong>The Reagan J. Family</strong>
								</q>
							</blockquote>
				</div>
			</div>
		</section>
	</main>
</div>
@stop
