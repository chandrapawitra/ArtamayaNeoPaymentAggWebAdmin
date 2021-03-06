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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Breadcrumbs</span>
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
						<div class="card custom-card" id="basic">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Styling</h6>
									<p class="text-muted card-sub-title">The example below is the basic styling of the breadcrumb from Bootstrap.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb mg-b-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb1"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="custom">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Custom Styling</h6>
									<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb used by this template.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-style1 mg-b-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb2"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>

		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="divider">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Custom Divider</h6>
									<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb using different divider.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-style2 mb-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb3"><pre><code class="language-markup"><script type="html-dashlead/script"><nav aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-style2">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Breadcrumbs-Center align</h6>
									<p class="text-muted card-sub-title">The example below is the center aligment of the breadcrumb</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<nav class="breadcrumb-3">
											<ol class="breadcrumb breadcrumb-style1 mb-0">
												<li class="breadcrumb-item">
													<a href="#">Home</a>
												</li>
												<li class="breadcrumb-item">
													<a href="#">Library</a>
												</li>
												<li class="breadcrumb-item active">Data</li>
											</ol>
										</nav>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb4"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="breadcrumb-3">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="right">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Breadcrumbs-Right align</h6>
										<p class="text-muted card-sub-title">The example below is the Right aligment of the breadcrumb</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<nav class="breadcrumb-4">
												<ol class="breadcrumb breadcrumb-style1 mb-0">
													<li class="breadcrumb-item">
														<a href="#">Home</a>
													</li>
													<li class="breadcrumb-item">
														<a href="#">Library</a>
													</li>
													<li class="breadcrumb-item active">Data</li>
												</ol>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb5"><pre><code class="language-markup"><script type="html-dashlead/script"><nav class="breadcrumb-4">
	<ol class="breadcrumb breadcrumb-style1">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="#">Library</a>
		</li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</nav></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#breadcrumb5"><i class="fa fa-clipboard"></i></div>
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

		<!-- Select2 js-->
        <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
        
		<!-- Internal Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection