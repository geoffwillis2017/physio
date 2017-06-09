@extends('pages.master')
@section('content')

<div class="container">
	<section id="page-info" class="container-fluid">
		<div class="row">
			<div class="img-area">
				<div class="holder">
					<img data-velocity="-.5" class="parallax-main" src="images/gallery-head.jpg" width="1600" height="196" alt="" />
				</div>
			</div>	
		</div>  <!-- end of row -->
		<div class="textholder">
			<div class="container textblock">
				<div class="block">
					<div class="page-title">
						<div class="holder">
							<h1>Photo Gallery</h1>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end of text-holer -->
	</section>
</div> <!-- end of container_1 -->

<div class="container">
	@if (Auth::check())
		@if (Auth::user()->name === 'admin')
			<!-- Uploading an image -->
			{!! Form::open(['url' => 'gallery' , 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops</strong> There were some problems with your input<br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">x</button>
						<strong>{{ $message }}</strong>
					</div>
				@endif

				<div class="row">
					<div class="col-md-5">
						<strong>Title:</strong>
						<input type="text" name="title" class="form-control" placeholder="Title">
					</div>
					<div class="col-md-5">
						<strong>Image:</strong>
						<input type="file" name="image" class="form-control" >
					</div>
					<div class="col-md-2">
						<br>
						<button type="submit" class="btn btn-success">Upload</button>
					</div>			
				</div>	<!-- end of row_1-->
			{!! Form::close() !!}
		@endif
	@endif

</div> <!-- end of container_2 -->
	
	<!--Displaying the images -->
<main id="main" role="main" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
				<div id="content">
					<div id="timeline" data-columns class="gallery">
						@if ($images->count())
							@foreach($images as $image)
								<div class="item">
											<!-- delete image form -->
									@if (Auth::check())
										@if (Auth::user()->name === 'admin')	
											<form action="{{ url('gallery', '$image->id') }}" method="post">
												{!! csrf_field() !!}
												<input type="hidden" name="_method" value="delete">
												<button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
											</form>  
										@endif			
									@endif
													<!-- display image-->
											<div class="img-area">
												<img class="img-responsive" alt="image" src="/images/gallery/{{ $image->image }}">
													<div class="hover-block">
														<ul class="bar">
															<li>+</li>
															<li>
																<a class="fancybox-buttons" data-fancybox-group="button" href="/images/gallery/{{ $image->image }}" ><span class="fa fa-plus"></span></a>
															</li>
															<li>+</li>
														</ul>
													</div> 
									</div> <!-- end of image-area -->
								</div> <!-- end of item -->	
								@endforeach
							@endif											
					</div> <!-- end of timeline -->
				</div>	<!-- end of div content -->		
			</div>	<!-- end of column -->
		</div> <!-- end of row_2 -->
	</div> <!--end of container_3 -->
</main>  <!-- end of main -->
@endsection
<!-- footer -->