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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Typography</span>
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
						<div class="card mg-b-20" id="typography">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Size
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[size]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Values</b></td>
												<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[viewport]-[size]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Viewports</b></td>
												<td>xs | sm | md | lg | xl</td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Sizes</b></td>
												<td>8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 22 | 24 | ... | 140 (step of 2)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Weight
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100"><b>Classes</b></td>
												<td><code>.tx-[weight]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100"><b>Weight</b></td>
												<td>bold | semibold | medium | normal | light | thin | xthin</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Color
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-[color]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-gray-[num]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-white-[transparency]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Colors</b></td>
												<td>2 | 3 | 4 | 5 | 6 | 7 | 8</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Font Spacing
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-spacing-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.tx-spacing--[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 ( negative spacing result )</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Height
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.lh-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.lh-[viewport]-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>View Port</b></td>
												<td>xs | sm | md | lg | xl</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15</td>
											</tr>
										</tbody>
									</table>
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