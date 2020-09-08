@extends('admin.admin_layouts')

@section('admin_content')

<div class="dream-university-subpage">

	<!-- Begin breadcrumbs-->
	<div class="du-page-header du-breadcrumbs">		
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-12 text-left du-title">
					<div class="du-breadcrumb-title"><h3>Create Post</h3></div>				
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12 text-right du-breadcrumb">
					<div class="breadcrumbs">
						Create Post page
					</div>
				</div>				
			</div>
		</div>		
	</div>
	<!-- End breadcrumbs-->
	
	
	<!-- Begin Contact -->
	<div class="du-subpage-content">
		<div class="du-contact">

			<!-- Begin choose us -->
			<section class="contact ptb-50">
				<div class="container">
					
					<section class="du-contact-form">

						<div class="row">
							<div class="col-md-12">
								<div class="row du-contact-form"> 
								<form class="contact100-form validate-form" action="{{route('admin.add.post')}}" method="post" enctype="multipart/form-data">
									@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									@csrf

										<div class="form-group col-md-12"> 
											<input type="text" class="form-control" placeholder="Title" name="post_title"> 
										</div>

										<div class="form-group col-md-12"> 
											<input type="file" class="form-control" placeholder="" name="post_image"> 
										</div> 

										<div class="col-md-12"> 
											<textarea class="form-control" rows="9" placeholder="Discription" name="post_details">
											</textarea> 
											<button type="submit" class="btn-default du-common-property">Published</button> 
										</div> 
									</form> 

								</div> 
							</div>
						</div>					
					</section>			
				</div>
			</section>
			<!-- End contact-->			
		</div><!-- /.du-contact -->
	</div><!-- /.du-subpage content -->
	<!-- End Contact -->

</div>
@endsection