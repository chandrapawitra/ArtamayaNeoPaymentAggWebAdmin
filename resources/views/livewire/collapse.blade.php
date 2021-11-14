@extends('layouts.app')

@section('style')

		<!---Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Multislider css-->
		<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Collapse</span>
						</div>
					</div>
					<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
						<button type="button" class="btn btn-warning btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-download "></i>
						</button>
						<button type="button" class="btn btn-danger  btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-clock"></i>
						</button>
						<button type="button" class="btn btn-success btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-plus"></i>
						</button>
						<button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">Click the buttons below to show and hide another element via class changes</p>
								</div>
								<div>
									<a aria-controls="collapseExample" aria-expanded="false" class="btn ripple btn-primary" data-toggle="collapse" href="#collapseExample" role="button">Toggle Content</a>
									<div class="collapse mg-t-20" id="collapseExample">
										<div class="">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multiple Targets</h6>
									<p class="text-muted card-sub-title">A button or link can show and hide multiple elements by referencing them with a jquery selector in its href or data-target attribute.</p>
								</div>
								<div>
									<div class="btn-list">
										<a aria-controls="multiCollapseExample1" aria-expanded="false" class="btn ripple btn-primary mb-0 mb-xl-0 mt-2 mb-2 mr-3" data-toggle="collapse" href="#multiCollapseExample1" role="button">Toggle First Content</a>
										<a aria-controls="multiCollapseExample2" aria-expanded="false" class="btn ripple btn-secondary mb-0 mb-xl-0 mt-2 mb-2 mr-3" href="#multiCollapseExample2" data-toggle="collapse" role="button">Toggle Second Content</a>
										<a aria-controls="multiCollapseExample1 multiCollapseExample2" aria-expanded="false" class="btn ripple btn-success mb-0 mb-xl-0 mt-2 mb-2 mr-3" href=".multi-collapse" data-toggle="collapse" role="button">Toggle Both Contents</a>
									</div>
									<div class="row row-sm">
										<div class="col">
											<div class="collapse multi-collapse " id="multiCollapseExample1">
												<div class="mt-3">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												</div>
											</div>
										</div>
										<div class="col">
											<div class="collapse multi-collapse " id="multiCollapseExample2">
												<div class="mt-3">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Datepicker js -->
        <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
        
		<!-- Select2 js-->
        <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
        
		<!-- Owl Carousel js-->
        <script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
        
		<!-- Internal Multislider js-->
		<script src="{{URL::asset('assets/plugins/multislider/multislider.js')}}"></script>
		<script src="{{URL::asset('assets/js/carousel.js')}}"></script>

@endsection