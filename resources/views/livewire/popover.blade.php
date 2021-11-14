@extends('layouts.app')

@section('style')

		<!--- Internal Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Popover</span>
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
					<div class="col-xl-12 col-lg-12">
						<div class="card" id="popover">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
									<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
											STATIC EXAMPLE
										</div>
										<div class="popover-static-demo">
											<div class="row">
												<div class="col-md-6">
													<div class="popover bs-popover-top">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover top</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30 mg-md-t-0">
													<div class="popover bs-popover-bottom">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Bottom</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-left">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Left</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
												<div class="col-md-6 mg-t-30">
													<div class="popover bs-popover-right">
														<div class="arrow"></div>
														<h3 class="popover-header">Popover Right</h3>
														<div class="popover-body">
															<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
														</div>
													</div><!-- popover -->
												</div><!-- col-6 -->
											</div><!-- row -->
										</div>
									</div>
									<div class="example border-top-0">
									<div class="tx-10 mb-1 font-weight-bold text-muted text-uppercase">
										Live EXAMPLE
									</div>
									<div class="pd-20 bg-gray-200">
										<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
											</div><!-- col-3 -->
                                            <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover left">Click me</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover right">Click me</button>
											</div><!-- col-3 -->
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
											</div><!-- col-3 -->
										</div><!-- row -->
									</div>
								</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="popover01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
	</div><!-- col-3 -->
    <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover left">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover right">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover bottom">Click me</button>
	</div><!-- col-3 -->
</div><!-- row --></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#popover01"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card" id="popover2">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
										<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="popover-static-demo">
												<div class="row">
													<div class="col-md-6">
														<div class="popover popover-head-primary bs-popover-top">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
													<div class="col-md-6 mg-t-30 mg-md-t-0">
														<div class="popover popover-head-secondary bs-popover-top">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
												</div>
											</div>
										</div>
										<div class="example border-top-0">
											<div class="pd-20 bg-gray-200">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
													</div><!-- col-3 -->
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Bottom">Click me</button>
													</div><!-- col-3 -->
												</div>
											</div>
										</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="popover02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
		<div class="col-sm-6 col-lg-3">
			<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
		</div><!-- col-3 -->
		<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
			<button type="button" class="btn btn-primary" data-container="body" data-popover-color="head-secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
		</div><!-- col-3 -->
	</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#popover02"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card" id="popover3">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">DEFAULT POPOVER</h6>
										<p class="text-muted card-sub-title">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="popover-static-demo">
												<div class="row">
													<div class="col-md-6">
														<div class="popover popover-primary bs-popover-top">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover top</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
													<div class="col-md-6 mg-t-30 mg-md-t-0">
														<div class="popover popover-secondary bs-popover-bottom">
															<div class="arrow"></div>
															<h3 class="popover-header">Popover Bottom</h3>
															<div class="popover-body">
																<p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
															</div>
														</div><!-- popover -->
													</div><!-- col-6 -->
												</div>
											</div>
										</div>
										<div class="example border-top-0">
											<div class="pd-20 bg-gray-200">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
												    </div><!-- col-3 -->
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button type="button" class="btn btn-primary" data-container="body" data-popover-color="secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Bottom">Click me</button>
													</div><!-- col-3 -->
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="popover03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button type="button" class="btn btn-primary" data-container="body" data-popover-color="primary" data-placement="top" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button type="button" class="btn btn-primary" data-container="body" data-popover-color="secondary" data-placement="bottom" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover top">Click me</button>
	</div><!-- col-3 -->
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#popover03"><i class="fa fa-clipboard"></i></div>
</figure>
	<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('script')

		<!-- Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection
